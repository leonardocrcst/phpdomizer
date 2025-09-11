<?php

namespace Phpdomizer\Element\Lists;

class Menu extends Lists
{
    public function __construct(?string $class = null)
    {
        parent::__construct('menu');
        $this->class->add($class);
    }
}