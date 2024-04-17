<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Section extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('section');
        $this->class->add($class);
    }
}