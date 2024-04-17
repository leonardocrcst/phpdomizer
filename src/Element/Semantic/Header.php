<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Header extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('header');
        $this->class->add($class);
    }
}