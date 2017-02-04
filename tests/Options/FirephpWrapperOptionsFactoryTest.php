<?php

namespace MpaFirephpWrapperTest\Options;

use MpaFirephpWrapper\Options\FirephpWrapperOptions;
use MpaFirephpWrapper\Options\FirephpWrapperOptionsFactory;
use MpaFirephpWrapperTest\Util\ServiceManagerFactory;
use PHPUnit\Framework\TestCase;

class FirephpWrapperOptionsFactoryTest extends TestCase
{
    public function testFactoryReturnsInstance()
    {
        $factory = new FirephpWrapperOptionsFactory();
        $result  = $factory->createService(ServiceManagerFactory::getServiceManager());

        $this->assertInstanceOf(FirephpWrapperOptions::class, $result);
    }
}
