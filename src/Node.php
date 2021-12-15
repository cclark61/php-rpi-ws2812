<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node Class
 *
 * @package         Cclark61\RPi\WS2812
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812;

class Node
{
    //=========================================================================
    // Traits
    //=========================================================================
    use Traits\Node\Core\Buffer;
    use Traits\Node\Core\Config;
    use Traits\Node\Core;
    use Traits\Node\Blink;
    use Traits\Node\Fade;
    use Traits\Node\Fill;
    use Traits\Node\Gradient;
    use Traits\Node\Rainbow;
    use Traits\Node\Random;
    use Traits\Node\Rotate;
}
