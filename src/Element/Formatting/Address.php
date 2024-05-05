<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Address extends Element
{
    public function __construct(?string $content = null, ?string $classes = null)
    {
        parent::__construct("address");
        $this->class->add($classes);
        $this->add($content);
    }
}