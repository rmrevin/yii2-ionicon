<?php
/**
 * Icon.php
 * @author Revin Roman
 * @link https://rmrevin.com
 */

namespace rmrevin\yii\ionicon\component;

use rmrevin\yii\ionicon\Ion;
use yii\helpers\Html;

/**
 * Class Icon
 * @package rmrevin\yii\ionicon\component
 */
class Icon
{

    /** @var array */
    private $options = [];

    /**
     * @param string $name
     * @param array $options
     */
    public function __construct($name, $options = [])
    {
        Html::addCssClass($options, Ion::$cssPrefix . '-' . $name);

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @param string $class
     * @return self
     */
    public function addCssClass($class)
    {
        Html::addCssClass($this->options, $class);

        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        return Html::tag('i', null, $this->options);
    }
}
