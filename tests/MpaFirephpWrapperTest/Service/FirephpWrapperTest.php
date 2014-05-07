<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapperTest\Service;

use MpaFirephpWrapper\Service\FirephpWrapper;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;

class FirephpWrapperTest extends \PHPUnit_Framework_TestCase
{
    protected $serviceManager;

    protected function setUp()
    {
        $this->serviceManager = ServiceManagerFactory::getServiceManager();
    }

    public function testFirephpWrapperReallyWrapsFirePHP()
    {
        $wrapper = (new FirephpWrapper(ServiceManagerFactory::getApplicationConfig()))->getFirephp();
        $this->assertInstanceOf('FirePHP', $wrapper);
    }

    public function testNoConfigProvidedIsNotAProblem()
    {
        $config =ServiceManagerFactory::getApplicationConfig();
        unset($config['mpafirephpwrapper']);
        $wrapper = (new FirephpWrapper($config))->getFirephp();
        $this->assertInstanceOf('FirePHP', $wrapper);
    }
}
