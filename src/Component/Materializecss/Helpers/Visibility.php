<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Basement\Element;

abstract class Visibility
{
    public static function hide(Element $element, HideOn ...$on): Element
    {
        $element->class->add(...$on);
        return $element;
    }
}