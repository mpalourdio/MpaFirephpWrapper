<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapper\Options;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FirephpWrapperOptionsFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return FirephpWrapperOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');

        if (isset($config['mpafirephpwrapper'])) {
            return new FirephpWrapperOptions($config['mpafirephpwrapper']);
        }

        return new FirephpWrapperOptions([
            'maxObjectDepth'      => 3,
            'maxArrayDepth'       => 3,
            'maxDepth'            => 3,
            'useNativeJsonEncode' => true,
            'includeLineNumbers'  => true
        ]);
    }
}
