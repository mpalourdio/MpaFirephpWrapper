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
use Zend\ServiceManager\ServiceLocatorInterface;

class FirephpWrapper
{
    /** @var  FirePHP $firephp */
    protected $firephp;

    public function __construct(ServiceLocatorInterface $serviceLocator)
    {
        $this->firephp = new FirePHP();
        $config        = $serviceLocator->get('Config');
        if (array_key_exists('mpafirephpwrapper', $config)) {
            $options = $config['mpafirephpwrapper'];
        } else {
            $options = array(
                'maxObjectDepth'      => 3,
                'maxArrayDepth'       => 3,
                'maxDepth'            => 3,
                'useNativeJsonEncode' => true,
                'includeLineNumbers'  => true
            );
        }

        $this->firephp->setOptions($options);
    }

    public function write($object, $type = 'info', $label = null, $options = array())
    {
        return $this->firephp->$type($object, $label, $options);
    }
}