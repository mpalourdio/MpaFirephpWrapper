<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapperTest\Controller\Plugin;

use MpaFirephpWrapper\Controller\Plugin\FirephpPlugin;
use MpaFirephpWrapper\Service\FirephpWrapper;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;

class FirephpPluginTest extends \PHPUnit_Framework_TestCase
{
    public function testFirephpPlugin()
    {
        $firePhpPlugin = new FirephpPlugin(
            ServiceManagerFactory::getServiceManager()->get('firephp')
        );

        $this->assertInstanceOf(FirephpWrapper::class, $firePhpPlugin->__invoke('test'));
    }

    public function testPluginCallsLogsSomething()
    {
        $firePhpPlugin = new FirephpPlugin(
            ServiceManagerFactory::getServiceManager()->get('firephp')
        );

        $this->assertEquals(1, $firePhpPlugin->__invoke('test')->howManyLogged());
    }
}
