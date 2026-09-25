<?php

use Freekattema\Wp\Components\Component;

final class Diensten extends Component {
    function get_template(): string
    {
        return __DIR__ . '/Diensten.template.php';
    }
}
