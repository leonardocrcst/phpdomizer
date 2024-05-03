<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Progress extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('progress');
        $this->class->add($class);
    }
}