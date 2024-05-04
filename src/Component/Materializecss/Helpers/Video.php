<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Basement\Element;
use Phpdomizer\Element\Semantic\Div;

class Video
{
    public static function responsive(Element $element): Element
    {
        $element->class->add('responsive-video');
        return $element;
    }

    public static function container(Div $div): Element
    {
        $div->class->add('video-container');
        return $div;
    }
}