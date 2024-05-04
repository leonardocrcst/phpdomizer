<?php

namespace Phpdomizer\Component\Materializecss\Color;

use Phpdomizer\Basement\Element;

abstract class Color
{
    protected static ?string $color = null;

    public static function darken(Element $element, int $deep = 1): Element
    {
        $element->class->add(self::$color . " darken-$deep");
        return $element;
    }

    public static function lighten(Element $element, int $deep = 1): Element
    {
        $element->class->add(self::$color . " lighten-$deep");
        return $element;
    }

    public static function accent(Element $element, int $deep = 1): Element
    {
        $element->class->add(self::$color . " accent-$deep");
        return $element;
    }

    public static function set(Element $element): Element
    {
        $element->class->add(self::$color);
        return $element;
    }
}