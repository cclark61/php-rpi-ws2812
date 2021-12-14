<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node Fill Trait
 *
 * @package         Cclark61\RPi\WS2812
 * @subpackage      Traits
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812\Traits;

trait Fill
{
    //=========================================================================
    //=========================================================================
    // Fill Method
    //=========================================================================
    //=========================================================================
    public function Fill($args)
    {
        if (is_scalar($args)) {
            $args = ['color' => $args];
        }
        $bit_op = false;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "fill {$channel}, {$color}, {$start}, {$len}";
        $cmd .= ($bit_op) ? ($bit_op . ';') : (';');
        $this->WriteCommand($cmd);
    }

}
