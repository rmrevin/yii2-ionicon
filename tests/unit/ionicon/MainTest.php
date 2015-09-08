<?php
/**
 * MainTest.php
 * @author Revin Roman
 */

namespace rmrevin\yii\ionicon\tests\unit\ionicon;

use rmrevin\yii\ionicon\Ion;
use rmrevin\yii\ionicon\Ionicon;

/**
 * Class MainTest
 * @package rmrevin\yii\ionicon\tests\unit\ionicon
 */
class MainTest extends \rmrevin\yii\ionicon\tests\unit\TestCase
{

    public function testMain()
    {
        $this->assertInstanceOf('rmrevin\yii\ionicon\Ion', new Ion());
        $this->assertInstanceOf('rmrevin\yii\ionicon\Ionicon', new Ion());

        $this->assertInstanceOf('rmrevin\yii\ionicon\Ionicon', new Ionicon());

        $Icon = Ion::icon('social-twitter');
        $this->assertInstanceOf('rmrevin\yii\ionicon\component\Icon', $Icon);
    }

    public function testIconOutput()
    {
        $this->assertEquals(Ion::icon('social-twitter'), '<i class="ion-social-twitter"></i>');
        $this->assertEquals(Ion::icon('social-twitter')->addCssClass('highlight'), '<i class="ion-social-twitter highlight"></i>');
    }

    public function testGetConstants()
    {
        $this->assertNotEmpty(Ion::getConstants(false));
        $this->assertNotEmpty(Ion::getConstants(true));
    }
}