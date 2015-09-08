<?php
/**
 * AssetBundleTest.php
 * @author Revin Roman
 */

namespace rmrevin\yii\ionicon\tests\unit\ionicon;

use rmrevin\yii\ionicon\AssetBundle;

/**
 * Class AssetBundleTest
 * @package rmrevin\yii\ionicon\tests\unit\ionicon
 */
class AssetBundleTest extends \rmrevin\yii\ionicon\tests\unit\TestCase
{

    public function testMain()
    {
        AssetBundle::register(\Yii::$app->getView());
    }
}