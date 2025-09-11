<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Basement\Element;

class Image
{
    public static function circle(Element $element): Element
    {
        $element->class->add('circle');
        return $element;
    }

    public static function responsive(Element $element): Element
    {
        $element->class->add('responsive-img');
        return $element;
    }
}