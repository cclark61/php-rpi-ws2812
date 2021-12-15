<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node 1D Random Trait
 *
 * @package         Cclark61\RPi\WS2812
 * @subpackage      Traits\Node\OneD
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812\Traits\Node\OneD;

trait Random
{
    //=========================================================================
    //=========================================================================
    // Random Method
    //=========================================================================
    //=========================================================================
    public function Random($args=[])
    {
        $color_components = 'L';
        if (is_string($args)) {
            $args = ['color_components' => $args];
        }
        else if (!is_array($args)) {
            $args = [];
        }
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $color_components = strtoupper($color_components);
        $cmd = "random {$channel}, {$start}, {$len}, {$color_components};";
        $this->WriteCommand($cmd);
    }

}
