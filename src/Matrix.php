<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 LED Matrix Class
 *
 * @package         Cclark61\RPi\WS2812
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812;

class Matrix extends Node
{
    //=========================================================================
    // Traits
    //=========================================================================
    use Traits\Node\TwoD\Core;
    use Traits\Node\TwoD\Cls;
    use Traits\Node\TwoD\DrawCircle;

    //=========================================================================
    //=========================================================================
    // Constructor
    //=========================================================================
    //=========================================================================
    public function __construct($node_config='', Array $args=[], Array $opts=[])
    {
        //---------------------------------------------------------------------
        // Node Config
        //---------------------------------------------------------------------
        parent::__construct($node_config, $args, $opts);

        //---------------------------------------------------------------------
        // 2d Configuration / Setup
        //---------------------------------------------------------------------
        $this->Config2D($args);
        $this->InitLayer($args);
    }

}
