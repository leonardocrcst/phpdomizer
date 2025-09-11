<?php

namespace Phpdomizer\Element\Lists;

class Ordered extends Lists
{
    public function __construct(?string $class = null)
    {
        parent::__construct("ol");
        $this->class->add($class);
    }
}