<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/** @todo, implement log/info/warn/error */
namespace MpaFirephpWrapper\Factory;

use FirePHP;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FirephpFactory implements FactoryInterface
{
    /** @var  FirePHP $firephp */
    protected $firephp;

    public function createService(ServiceLocatorInterface $serviceLocator)
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

        return $this;
    }

    public function write($object, $label = null, $options = array())
    {
        return $this->firephp->info($object, $label, $options);
    }
}