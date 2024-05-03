<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Main extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('main');
        $this->class->add($class);
    }
}