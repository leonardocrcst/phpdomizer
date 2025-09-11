<?php

namespace Phpdomizer\Element\Basic;

use Phpdomizer\Basement\Element;

class Title extends Element
{
    public function __construct(string $title)
    {
        parent::__construct("title");
        $this->add($title);
    }
}