<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Samp extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('samp');
        $this->class->add($class);
    }
}