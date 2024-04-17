<?php

namespace Phpdomizer\Element\Programming;

use Phpdomizer\Basement\Element;

class Script extends Element
{
    public ?string $src = null;

    public function __construct(string $src)
    {
        parent::__construct('script');
        $this->src = $src;
    }
}