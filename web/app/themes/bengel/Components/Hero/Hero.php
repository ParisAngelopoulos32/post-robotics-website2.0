<?php

use Freekattema\Wp\Components\Component;

final class Hero extends Component {
    function get_template(): string
    {
        return __DIR__ . '/Hero.template.php';
    }
}
