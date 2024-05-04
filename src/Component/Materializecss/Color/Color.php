<?php

namespace Phpdomizer\Component\Materializecss\Color;

use Phpdomizer\Basement\Element;

abstract class Color
{
    protected static ?string $color = null;
    protected static bool $text = false;

    protected static function getGround(): string
    {
        return !empty(self::$text)
            ? self::$color . '-text'
            : self::$color;
    }

    protected static function getVariant(string $variant, int $deep = 1): string
    {
        return !empty(self::$text)
            ? " text-$variant-$deep"
            : " $variant-$deep";
    }

    public static function darken(Element $element, int $deep = 1): Element
    {
        $element->class->add(self::getGround() . self::getVariant('darken', $deep));
        return $element;
    }

    public static function lighten(Element $element, int $deep = 1): Element
    {
        $element->class->add(self::getGround() . self::getVariant('lighten', $deep));
        return $element;
    }

    public static function accent(Element $element, int $deep = 1): Element
    {
        $element->class->add(self::getGround() . self::getVariant('accent', $deep));
        return $element;
    }

    protected abstract static function setColor();
}