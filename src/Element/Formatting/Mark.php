<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Mark extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('mark');
        $this->class->add($class);
    }
}