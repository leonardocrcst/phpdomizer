<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Basement\Element;

class Truncate
{
    public static function content(Element $element): Element
    {
        $element->class->add('truncate');
        return $element;
    }
}