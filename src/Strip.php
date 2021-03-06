<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 LED Strip Class
 *
 * @package         Cclark61\RPi\WS2812
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812;

class Strip extends Node
{
    //=========================================================================
    // Traits
    //=========================================================================
    use Traits\Node\OneD\Blink;
    use Traits\Node\OneD\Fade;
    use Traits\Node\OneD\Fill;
    use Traits\Node\OneD\Gradient;
    use Traits\Node\OneD\Rainbow;
    use Traits\Node\OneD\Random;
    use Traits\Node\OneD\Rotate;

    //=========================================================================
    //=========================================================================
    // Constructor
    //=========================================================================
    //=========================================================================
    public function __construct($node_config='', Array $args=[], Array $opts=[])
    {
        parent::__construct($node_config, $args, $opts);
    }

}
