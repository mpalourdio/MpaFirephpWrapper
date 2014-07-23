<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapperTest\View\Helper;

use MpaFirephpWrapper\Service\FirephpWrapper;
use MpaFirephpWrapper\View\Helper\FirephpHelper;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;

class FirephpHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testFirephpHelper()
    {
        $firePhpHelper = new FirephpHelper(
            ServiceManagerFactory::getServiceManager()->get('firephp')
        );

        $this->assertInstanceOf(FirephpWrapper::class, $firePhpHelper->__invoke('test'));
    }

    /**
     * @runInSeparateProcess
     */
    public function testHelperCallsLogsSomething()
    {
        $firePhpHelper = new FirephpHelper(
            ServiceManagerFactory::getServiceManager()->get('firephp')
        );

        $this->assertEquals(1, $firePhpHelper->__invoke('test')->howManyLogged());
    }
}
