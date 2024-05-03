<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Aside extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('aside');
        $this->class->add($class);
    }
}