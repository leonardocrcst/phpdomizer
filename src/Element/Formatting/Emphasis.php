<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Emphasis extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('em');
        $this->class->add($class);
    }
}