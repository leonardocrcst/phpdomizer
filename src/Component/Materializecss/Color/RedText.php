<?php

namespace Phpdomizer\Component\Materializecss\Color;

use Phpdomizer\Basement\Element;

class RedText extends Color
{
    public static function darken(Element $element, int $deep = 1): Element
    {
        self::setColor();
        return parent::darken($element, $deep);
    }

    protected static function setColor()
    {
        self::$color = 'red';
        self::$text = true;
    }

    public static function accent(Element $element, int $deep = 1): Element
    {
        self::setColor();
        return parent::lighten($element, $deep);
    }

    public static function lighten(Element $element, int $deep = 1): Element
    {
        self::setColor();
        return parent::lighten($element, $deep);
    }
}