<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Footer extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('footer');
        $this->class->add($class);
    }
}