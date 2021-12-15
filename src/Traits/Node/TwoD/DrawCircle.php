<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node 2D Draw Circle Trait
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

trait DrawCircle
{
    //=========================================================================
    //=========================================================================
    // DrawCircle Method
    //=========================================================================
    //=========================================================================
    public function DrawCircle(Array $args=[])
    {
        $places = 1;
        $direction = 0;
        $rrggbb = '';
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "rotate {$channel}, {$places}, {$direction}";
        if ($rrggbb) {
            $cmd .= ', ' . $rrggbb;
        }
        $cmd .= ';';
        $this->WriteCommand($cmd);
    }

}
