<?php

namespace phpdomizer\Element\Basic;

use phpdomizer\Basement\Element;

class Title extends Element
{
    public function __construct(string $title)
    {
        parent::__construct("title");
        $this->add($title);
    }
}