<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Dialog extends Element
{
    public bool $open = false;

    public function __construct(mixed $content, ?string $class = null)
    {
        parent::__construct('dialog');
        $this->class->add($class);
        $this->add($content);
    }

    public function open(): void
    {
        $this->open = true;
    }
}