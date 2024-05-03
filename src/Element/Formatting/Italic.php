<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Italic extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('i');
        $this->class->add($class);
    }
}