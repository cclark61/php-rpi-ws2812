<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node 2D Cls Trait
 *
 * @package         Cclark61\RPi\WS2812
 * @subpackage      Traits\Node\TwoD
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812\Traits\Node\TwoD;

trait Cls
{
    //=========================================================================
    //=========================================================================
    // Cls Method
    //=========================================================================
    //=========================================================================
    public function Cls($args=[])
    {
        $color = 'ffffff';
        if (is_scalar($args)) {
            $args = ['color' => (int)$color];
        }
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "cls {$channel}, {$color};";
        $this->WriteCommand($cmd);
    }

}
