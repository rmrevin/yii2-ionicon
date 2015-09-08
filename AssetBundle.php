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
    public $sourcePath = '@bower/ionicons';

    /**
     * @inherit
     */
    public $css = [
        'css/ionicons.min.css',
    ];

    /**
     * Initializes the bundle.
     * Set publish options to copy only necessary files (in this case css and font folders)
     * @codeCoverageIgnore
     */
    public function init()
    {
        parent::init();

        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css)%', $from);
        };
    }
}