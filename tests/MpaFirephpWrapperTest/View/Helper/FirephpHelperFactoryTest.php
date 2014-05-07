<?php

namespace MpaFirephpWrapperTest\View\Helper;

use MpaFirephpWrapper\Service\FirephpWrapper;
use MpaFirephpWrapper\View\Helper\FirephpHelper;
use MpaFirephpWrapper\View\Helper\FirephpHelperFactory;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;

class FirephpHelperFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $serviceManager;

    protected function setUp()
    {
        $this->serviceManager = ServiceManagerFactory::getServiceManager();
        $this->serviceManager->setAllowOverride(true);

        $this->serviceManager->setService(
            'firephp',
            $this->getMockBuilder(FirephpWrapper::class)
                ->disableOriginalConstructor()
                ->getMock()
        );
    }

    public function testSessionManagerFactory()
    {
        $factory = new FirephpHelperFactory();
        $result  = $factory->createService($this->serviceManager->get('ViewHelperManager'));

        $this->assertInstanceOf(FirephpHelper::class, $result);
    }
}
