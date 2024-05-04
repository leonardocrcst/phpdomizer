<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Basement\Element;

class Hover
{
    public static function content(Element $element): Element
    {
        $element->class->add('hoverable');
        return $element;
    }
}