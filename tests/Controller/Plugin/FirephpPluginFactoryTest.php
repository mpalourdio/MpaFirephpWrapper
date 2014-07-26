<?php

namespace MpaFirephpWrapperTest\Controller\Plugin;

use MpaFirephpWrapper\Controller\Plugin\FirephpPlugin;
use MpaFirephpWrapper\Controller\Plugin\FirephpPluginFactory;
use MpaFirephpWrapper\Service\FirephpWrapper;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;

class FirephpPluginFactoryTest extends \PHPUnit_Framework_TestCase
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

    public function testFactoryReturnsInstance()
    {
        $factory = new FirephpPluginFactory();
        $result  = $factory->createService($this->serviceManager->get('ControllerPluginManager'));

        $this->assertInstanceOf(FirephpPlugin::class, $result);
    }
}
