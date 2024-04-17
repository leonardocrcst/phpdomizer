<?php

namespace Phpdomizer\Component\Materializecss\Basement;

use Phpdomizer\Element\Programming\Script;

class Javascript extends Script
{
    public function __construct(?string $version = '1.0.0')
    {
        parent::__construct("https://cdnjs.cloudflare.com/ajax/libs/materialize/$version/js/materialize.min.js");
    }
}