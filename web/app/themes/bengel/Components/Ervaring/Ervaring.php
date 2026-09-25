<?php

use Freekattema\Wp\Components\Component;

final class Ervaring extends Component {
    function get_template(): string
    {
        return __DIR__ . '/Ervaring.template.php';
    }
}
