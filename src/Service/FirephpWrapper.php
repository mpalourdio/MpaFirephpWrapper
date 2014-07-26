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
use MpaFirephpWrapper\Options\FirephpWrapperOptions;

class FirephpWrapper
{
    /** @var  FirePHP $firephp */
    protected $firephp;
    protected $howManyLogged;

    /**
     * @param FirephpWrapperOptions $options
     */
    public function __construct(FirephpWrapperOptions $options)
    {
        $this->setFirephp(new FirePHP());
        $this->firephp->setOptions($options->toArray());

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
