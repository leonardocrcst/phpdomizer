<?php

namespace Phpdomizer\Component\Materializecss;

use Phpdomizer\Element\Semantic\Span;

class Badge extends Span
{
    public function __construct(mixed $content, bool $new = false)
    {
        parent::__construct($content, $new ? 'new badge' : 'badge');
    }

    public function caption(string $caption): void
    {
        $this->setDataAttribute('badge-caption', $caption);
    }
}