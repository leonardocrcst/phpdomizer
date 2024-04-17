<?php

namespace Phpdomizer\Component\Materializecss\Basement;

use Phpdomizer\Element\Links\Link;
use Phpdomizer\Element\Links\Type\Relationship;

class Stylesheet extends Link
{
    public function __construct(?string $version = '1.0.0')
    {
        parent::__construct(
            "https://cdnjs.cloudflare.com/ajax/libs/materialize/$version/css/materialize.min.css",
            Relationship::STYLESHEET
        );
    }
}