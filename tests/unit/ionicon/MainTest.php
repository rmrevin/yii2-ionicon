<?php
/**
 * MainTest.php
 * @author Revin Roman
 */

namespace rmrevin\yii\ionicon\tests\unit\ionicon;

use rmrevin\yii\ionicon\II;
use rmrevin\yii\ionicon\Ionicon;

/**
 * Class MainTest
 * @package rmrevin\yii\ionicon\tests\unit\ionicon
 */
class MainTest extends \rmrevin\yii\ionicon\tests\unit\TestCase
{

    public function testMain()
    {
        $this->assertInstanceOf('rmrevin\yii\ionicon\II', new II());
        $this->assertInstanceOf('rmrevin\yii\ionicon\Ionicon', new II());

        $this->assertInstanceOf('rmrevin\yii\ionicon\Ionicon', new Ionicon());

        $Icon = II::icon('social-twitter');
        $this->assertInstanceOf('rmrevin\yii\ionicon\component\Icon', $Icon);
    }

    public function testIconOutput()
    {
        $this->assertEquals(II::icon('social-twitter'), '<i class="ion-social-twitter"></i>');
        $this->assertEquals(II::icon('social-twitter')->addCssClass('highlight'), '<i class="ion-social-twitter highlight"></i>');
    }

    public function testGetConstants()
    {
        $this->assertNotEmpty(II::getConstants(false));
        $this->assertNotEmpty(II::getConstants(true));
    }
}