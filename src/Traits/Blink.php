<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node Blink Trait
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

trait Blink
{
    //=========================================================================
    //=========================================================================
    // Blink Method
    //=========================================================================
    //=========================================================================
    public function Blink(Array $args=[])
    {
        $color1 = '000000';
        $color2 = 'FFFFFF';
        $blink_count = 20;
        $delay = 250;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "blink {$channel}, {$color1}, {$color2}, {$delay}, {$blink_count}, {$start}, {$len};";
        $this->WriteCommand($cmd);
    }

}
