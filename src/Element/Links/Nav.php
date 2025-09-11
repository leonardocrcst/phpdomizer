<?php

namespace Phpdomizer\Element\Links;

use Phpdomizer\Basement\Element;

class Nav extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct("nav");
        $this->class->add($class);
    }
}