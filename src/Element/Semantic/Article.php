<?php

namespace Phpdomizer\Element\Semantic;

use Phpdomizer\Basement\Element;

class Article extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('article');
        $this->class->add($class);
    }
}