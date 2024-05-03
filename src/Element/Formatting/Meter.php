<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Meter extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('meter');
        $this->class->add($class);
    }
}