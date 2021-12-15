<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node 1D Fade Trait
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

trait Fade
{
    //=========================================================================
    //=========================================================================
    // Fade Method
    //=========================================================================
    //=========================================================================
    public function Fade(Array $args=[])
    {
        $start_brightness = $this->brightness;
        $end_brightness = 0;
        $delay = 20;
        $step = 1;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "fade {$channel}, {$start_brightness}, {$end_brightness}, {$delay}, {$step}, {$start}, {$len}";
        return $this->WriteCommand($cmd);
    }

    //=========================================================================
    //=========================================================================
    // Fade In Method
    //=========================================================================
    //=========================================================================
    public function FadeIn(Array $args=[])
    {
        if (!isset($args['start_brightness'])) {
            $args['start_brightness'] = 0;
        }
        if (!isset($args['end_brightness'])) {
            $args['end_brightness'] = $this->brightness;
        }
        return $this->Fade($args);
    }

}
