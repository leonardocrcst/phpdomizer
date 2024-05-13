<?php

namespace Phpdomizer\Element\Image;

use Phpdomizer\Basement\Element;

class Image extends Element
{
    protected string $src;
    protected string $alt;

    public function __construct(string $src, string $alt, ?string $class = null)
    {
        parent::__construct('img', true);
        $this->src = $src;
        $this->alt = $alt;
        $this->class->add($class);
    }
}