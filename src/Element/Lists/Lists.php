<?php

namespace Phpdomizer\Element\Lists;

use Phpdomizer\Basement\Element;

abstract class Lists extends Element
{
    public function __construct(string $type, ?string $class = null)
    {
        parent::__construct($type);
        $this->class->add($class);
    }

    public function item(mixed $content, ?string $class = null): Li
    {
        $li = new Li($content, $class);
        $this->add($li);
        return $li;
    }
}