<?php

namespace Phpdomizer\Element\Lists;

use Phpdomizer\Basement\Element;

class DefinitionTerm extends Element
{
    public function __construct(mixed $content = null, ?string $class = null)
    {
        parent::__construct('dt');
        $this->class->add($class);
        $this->add($content);
    }
}