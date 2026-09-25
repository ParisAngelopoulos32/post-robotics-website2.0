<?php

use Freekattema\Wp\Components\Component;

final class OverRobotics extends Component {
    function get_template(): string
    {
        return __DIR__ . '/OverRobotics.template.php';
    }
}
