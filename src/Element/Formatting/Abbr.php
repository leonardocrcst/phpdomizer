<?php

namespace Phpdomizer\Element\Formatting;

use Phpdomizer\Basement\Element;

class Abbr extends Element
{
    public function __construct(string $title, string $term)
    {
        parent::__construct("abbr");
        $this->title = $title;
        $this->add($term);
    }
}