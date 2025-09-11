<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Details extends Element
{
    public bool $open = false;

    public function __construct(string $summary, ?string $content = null, ?string $class = null)
    {
        parent::__construct('details');
        $this->class->add($class);
        $this->add(new class($summary) extends Element {
            public function __construct(string $summary) {
                parent::__construct('summary');
                $this->add($summary);
            }
        });
        $this->add($content);
    }

    public function open(): void
    {
        $this->open = true;
    }
}