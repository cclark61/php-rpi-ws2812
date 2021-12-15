<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node 1D Rainbow Trait
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

trait Rainbow
{
    //=========================================================================
    //=========================================================================
    // Rainbow Method
    //=========================================================================
    //=========================================================================
    public function Rainbow(Array $args=[])
    {
        $count = 1;
        $start_color = 0;
        $end_color = 255;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        $cmd = "rainbow {$channel}, {$count}, {$start_color}, {$end_color}, {$start}, {$len};";
        $this->WriteCommand($cmd);
    }

}
