<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Span extends Element
{
    public function __construct(mixed $content = null, ?string $class = null)
    {
        parent::__construct('span');
        $this->class->add($class);
        $this->add($content);
    }
}