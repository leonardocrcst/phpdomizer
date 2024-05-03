<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Cite extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('cite');
        $this->class->add($class);
    }
}