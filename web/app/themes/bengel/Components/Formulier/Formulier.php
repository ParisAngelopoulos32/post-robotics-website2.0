<?php

use Freekattema\Wp\Components\Component;

final class Formulier extends Component {
    function get_template(): string
    {
        return __DIR__ . '/Formulier.template.php';
    }
}
