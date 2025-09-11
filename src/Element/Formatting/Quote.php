<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Quote extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('q');
        $this->class->add($class);
    }
}