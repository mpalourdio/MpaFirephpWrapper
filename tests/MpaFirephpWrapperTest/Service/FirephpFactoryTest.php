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

use MpaFirephpWrapper\Service\FirephpFactory;
use MpaFirephpWrapper\Service\FirephpWrapper;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;
use PHPUnit_Framework_TestCase as TestCase;

class FirephpFactoryTest extends TestCase
{
    protected $sm;

    protected function setUp()
    {
        $this->sm = ServiceManagerFactory::getServiceManager();
    }

    public function testFirephpFactoryCanBeInitalized()
    {
        $this->sm->setService(
            'firephptest',
            $this->getMock('MpaFirephpWrapper\Service\FirephpFactory')
        );

        $factory = new FirephpFactory();
        $result  = $factory->createService($this->sm);
        $this->assertInstanceOf('MpaFirephpWrapper\Service\FirephpWrapper', $result);
    }

    public function testFirephpWrapperReallyWrapsFirePHP()
    {
        $wrapper = (new FirephpWrapper($this->sm))->getFirephp();
        $this->assertInstanceOf('FirePHP', $wrapper);
    }
}
