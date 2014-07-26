<?php

namespace MpaFirephpWrapperTest\Options;

use MpaFirephpWrapper\Options\FirephpWrapperOptions;
use MpaFirephpWrapper\Options\FirephpWrapperOptionsFactory;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;

class FirephpWrapperOptionsFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testFactoryReturnsInstance()
    {
        $factory = new FirephpWrapperOptionsFactory();
        $result  = $factory->createService(ServiceManagerFactory::getServiceManager());

        $this->assertInstanceOf(FirephpWrapperOptions::class, $result);
    }
}
