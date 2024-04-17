<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Div extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('div');
        $this->class->add($class);
    }
}