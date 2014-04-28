<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapper\Controller\Plugin;

use MpaFirephpWrapper\Service\FirephpWrapper;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FirephpPlugin extends AbstractPlugin implements ServiceLocatorAwareInterface
{
    protected $parentLocator;

    /**
     * Set service locator
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return self
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->parentLocator = $serviceLocator->getServiceLocator();

        return $this;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->parentLocator;
    }

    /**
     * @param $object
     * @param string $type
     * @param string $label
     * @param array $options
     * @return FirephpWrapper
     */
    public function __invoke($object, $type = 'info', $label = null, $options = [])
    {
        $firephp = $this->parentLocator->get('firephp');

        return $firephp->write($object, $type, $label, $options);
    }
}
