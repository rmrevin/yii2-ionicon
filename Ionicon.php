<?php
/**
 * Ionicon.php
 * @author Revin Roman
 * @link https://rmrevin.com
 */

namespace rmrevin\yii\ionicon;

/**
 * Class Ionicon
 * @package rmrevin\yii\ionicon
 */
class Ionicon
{

    /**
     * @param string $name
     * @param array $options
     * @return component\Icon
     */
    public static function icon($name, $options = [])
    {
        return new component\Icon($name, $options);
    }
}