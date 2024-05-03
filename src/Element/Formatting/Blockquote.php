<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Blockquote extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('blockquote');
        $this->class->add($class);
    }
}