<?php
//*****************************************************************************
//*****************************************************************************
/**
 * WS2812 Node 2D Core Trait
 *
 * @package         Cclark61\RPi\WS2812
 * @subpackage      Traits\Node\TwoD
 * @author          Christian J. Clark
 * @copyright       Christian J. Clark
 * @link            https://github.com/cclark61/php-rpi-ws2812
 * @link            https://github.com/tom-2015/rpi-ws2812-server/blob/master/COMMANDS.md
 **/
//*****************************************************************************
//*****************************************************************************

namespace Cclark61\RPi\WS2812\Traits\Node\TwoD;

trait Core
{
    //=========================================================================
    //=========================================================================
    // 2D Configuration / Setup Method
    //=========================================================================
    //=========================================================================
    public function Config2D(Array $args=[])
    {
        $width = $this->led_count;
        $height = 1;
        $panel_type = 0;
        $panel_size_x = $this->led_count;
        $panel_size_y = 1;
        $map_file = false;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        // config_2D <channel>,<width>,<height>,<panel_type>,<panel_size_x>,<panel_size_y>,<start_led>,<map_file>
        $cmd = "config_2D {$channel}, {$width}, {$height}, {$panel_type}, {$panel_size_x}, {$panel_size_y}, {$start}";
        if ($map_file) {
            $cmd .= ', ' . $map_file;
        }
        $cmd .= ';';
        $this->WriteCommand($cmd);
    }

    //=========================================================================
    //=========================================================================
    // Init Layer
    //=========================================================================
    //=========================================================================
    public function InitLayer(Array $args=[])
    {
        $layer = 1;
        $render_operation = 1;
        $type = 0;
        $antialiasing = 0;
        $filter_type = 0;
        $x = 0;
        $y = 0;
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        if ($render_operation < 0 || $render_operation > 28) {
            $render_operation = 1;
        }
        // init_layer <channel>,<layer_nr>,<render_operation>,<type>,<antialiasing>,<filter_type>,<x>,<y>
        $cmd = "init_layer {$channel}, {$layer}, {$render_operation}, {$type}, {$antialiasing}, {$filter_type}, {$x}, {$y};";
        $this->WriteCommand($cmd);
    }

    //=========================================================================
    //=========================================================================
    // Change Layer
    //=========================================================================
    //=========================================================================
    public function ChangeLayer($args=[])
    {
        $layer = 1;
        if (is_scalar($args)) {
            $args = ['layer' => (int)$args];
        }
        $args = $this->DefaultCommandArgs($args);
        extract($args);
        // change_layer <channel>,<layer_nr>
        $cmd = "change_layer {$channel}, {$layer};";
        $this->WriteCommand($cmd);
    }

}
