<?php

namespace Phpdomizer\Element\Basic;

use Phpdomizer\Basement\Element;

class Paragraph extends Element
{
    public function __construct(string|int|float|null $content = null)
    {
        parent::__construct('p');
        $this->add($content);
    }
}