<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.com
 */

namespace rmrevin\yii\ionicon\cdn;

/**
 * Class AssetBundle
 * @package rmrevin\yii\ionicon\cdn
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $css = [
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
    ];
}