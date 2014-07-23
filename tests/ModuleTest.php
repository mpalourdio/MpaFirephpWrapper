<?php

namespace MpaFirephpWrapperTest;

use MpaFirephpWrapperTest\Util\ServiceManagerFactory;
use Zend\I18n\Translator\Plural\Rule;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    protected $serviceManager;

    protected function setUp()
    {
        $this->serviceManager = ServiceManagerFactory::getServiceManager();
        $this->serviceManager->get('Application')->bootstrap();
    }

    public function testModuleHasSetPluralRule()
    {
        $pluralHelper = $this->serviceManager->get('ViewHelperManager')->get('Plural');

        $this->assertInstanceOf(Rule::class, $pluralHelper->getpluralRule());
    }
}
