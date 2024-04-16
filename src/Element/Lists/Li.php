<?php

namespace Phpdomizer\Element\Lists;

use Phpdomizer\Basement\Element;

class Li extends Element
{
    public function __construct(mixed $content = null, ?string $class = null)
    {
        parent::__construct('li');
        $this->class->add($class);
        $this->add($content);
    }
}