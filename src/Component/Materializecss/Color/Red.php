<?php

namespace Phpdomizer\Component\Materializecss\Color;

use Phpdomizer\Basement\Element;

class Red extends Color
{
    protected static function setColor()
    {
        self::$color = 'red';
    }

    public static function darken(Element $element, int $deep = 1): Element
    {
        self::setColor();
        return parent::darken($element, $deep);
    }

    public static function lighten(Element $element, int $deep = 1): Element
    {
        self::setColor();
        return parent::lighten($element, $deep);
    }

    public static function accent(Element $element, int $deep = 1): Element
    {
        self::setColor();
        return parent::accent($element, $deep);
    }
}