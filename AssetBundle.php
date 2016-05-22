<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.com
 */

namespace rmrevin\yii\ionicon;

/**
 * Class AssetBundle
 * @package rmrevin\yii\ionicon
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/rmrevin/yii2-ionicon/assets';

    /**
     * @inherit
     */
    public $css = [
        'css/ionicons.min.css',
    ];
}