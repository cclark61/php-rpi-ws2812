<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node Gradient Trait
 *
 * @package         Cclark61\RPi\WS2812
 * @subpackage      Traits\Node
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812\Traits\Node;

trait Gradient
{
    //=========================================================================
    //=========================================================================
    // Gradient Method
    //=========================================================================
    //=========================================================================
    public function Gradient($args=[])
    {
        $color_component = 'L';
        if (is_string($args) && strlen($args) == 1) {
            $args = ['color_component' => $args];
        }
        else if (!is_array($args)) {
            $args = [];
        }
        $start_level = 0;
        $end_level = 255;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $color_component = strtoupper($color_component);
        if (!in_array($color_component, str_split(static::$color_components, 1))) {
            die("[!!] Invalid color component.\n");
        }
        $cmd = "gradient {$channel}, {$color_component}, {$start_level}, {$end_level}, {$start}, {$len};";
        $this->WriteCommand($cmd);
    }

}
