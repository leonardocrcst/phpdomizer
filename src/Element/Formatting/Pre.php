<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Pre extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('pre');
        $this->class->add($class);
    }
}