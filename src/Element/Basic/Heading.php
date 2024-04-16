<?php

namespace phpdomizer\Element\Basic;

use phpdomizer\Basement\Element;

class Heading extends Element
{
    public function __construct(mixed $content = null, $level = 1)
    {
        parent::__construct("h$level");
        $this->add($content);
    }
}