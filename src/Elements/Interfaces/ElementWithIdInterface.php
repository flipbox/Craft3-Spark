<?php

/**
 * @package    Spark
 * @author     Flipbox Factory <hello@flipboxfactory.com>
 * @copyright  2010-2016 Flipbox Digital Limited
 * @license    https://github.com/FlipboxFactory/Craft3-Spark/blob/master/LICENSE
 * @link       https://github.com/FlipboxFactory/Craft3-Spark
 * @since      Class available since Release 1.1.0
 */

namespace Flipbox\Craft3\Spark\Elements\Interfaces;

interface ElementWithIdInterface extends ElementInterface
{

    /**
     * @return string
     */
    public function getId();

    /**
     * @param $id
     * @return $this
     */
    public function setId($id);

}
