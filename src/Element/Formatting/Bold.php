<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Bold extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('b');
        $this->class->add($class);
    }
}