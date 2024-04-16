<?php

namespace phpdomizer\Element\Links;

use phpdomizer\Basement\Element;

class Nav extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct("nav");
        $this->class->add($class);
    }
}