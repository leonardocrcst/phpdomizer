<?php

namespace Phpdomizer\Element\Lists;

class Unordered extends Lists
{
    public function __construct(?string $class = null)
    {
        parent::__construct('ul', $class);
    }
}