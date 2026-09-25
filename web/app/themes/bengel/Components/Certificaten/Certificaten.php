<?php

use Freekattema\Wp\Components\Component;

final class Certificaten extends Component {
    function get_template(): string
    {
        return __DIR__ . '/Certificaten.template.php';
    }
}
