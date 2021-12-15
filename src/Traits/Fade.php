<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node Fade Trait
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

trait Fade
{
    //=========================================================================
    //=========================================================================
    // Fade Method
    //=========================================================================
    //=========================================================================
    public function Fade(Array $args=[])
    {
        $start_brightness = 0;
        $end_brightness = 255;
        $delay = 50;
        $step = 1;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "fade {$start_brightness}, {$end_brightness}, {$delay}, {$start}, {$len}";
        $this->WriteCommand($cmd);
    }

}
