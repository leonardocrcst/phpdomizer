<?php

namespace Phpdomizer\Element\Table;

use Phpdomizer\Basement\Element;

class Caption extends Element
{
    public function __construct(string $text)
    {
        parent::__construct("caption");
        parent::add($text);
    }
}