<?php

use Freekattema\Wp\Components\Component;

final class AboutMe extends Component {
    function get_template(): string
    {
        return __DIR__ . '/AboutMe.template.php';
    }
}
