<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapper\Service;

use FirePHP;

class FirephpWrapper
{
    /** @var  FirePHP $firephp */
    protected $firephp;
    protected $howManyLogged;

    /**
     * @param  array $config
     * @return self
     */
    public function __construct(array $config)
    {
        $this->setFirephp(new FirePHP());

        if (array_key_exists('mpafirephpwrapper', $config)) {
            $options = $config['mpafirephpwrapper'];
        } else {
            $options = [
                'maxObjectDepth'      => 3,
                'maxArrayDepth'       => 3,
                'maxDepth'            => 3,
                'useNativeJsonEncode' => true,
                'includeLineNumbers'  => true
            ];
        }

        $this->firephp->setOptions($options);

        return $this;
    }

    /**
     * @param        $object
     * @param  string $type
     * @param  null   $label
     * @param  array  $options
     * @return self
     */
    public function write($object, $type = 'info', $label = null, $options = [])
    {
        $this->howManyLogged++;
        $this->firephp->$type($object, $label, $options);

        return $this;
    }

    /**
     * @return int
     */
    public function howManyLogged()
    {
        return $this->howManyLogged;
    }

    /**
     * @param \FirePHP $firephp
     */
    public function setFirephp($firephp)
    {
        $this->firephp = $firephp;
    }

    /**
     * @return \FirePHP
     */
    public function getFirephp()
    {
        return $this->firephp;
    }
}
