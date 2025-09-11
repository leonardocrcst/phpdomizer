<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Basement\Element;

abstract class Align
{
    public static function vertical(Element $element): Element
    {
        $element->class->add('valign-wrapper');
        return $element;
    }

    public static function left(Element $element): Element
    {
        $element->class->add('left-align');
        return $element;
    }

    public static function right(Element $element): Element
    {
        $element->class->add('right-align');
        return $element;
    }

    public static function center(Element $element): Element
    {
        $element->class->add('center-align');
        return $element;
    }
}