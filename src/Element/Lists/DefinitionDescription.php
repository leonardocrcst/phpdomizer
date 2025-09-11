<?php

namespace Phpdomizer\Element\Lists;

use Phpdomizer\Basement\Element;

class DefinitionDescription extends Element
{
    public function __construct(mixed $content = null, ?string $class = null)
    {
        parent::__construct('dd');
        $this->class->add($class);
        $this->add($content);
    }
}