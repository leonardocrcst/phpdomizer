<?php

namespace phpdomizer\Element\Links;

use phpdomizer\Common\MediaType\Image;
use phpdomizer\Element\Links\Link;

class Icon extends Link
{
    public ?string $sizes = null;

    public function __construct(string $href, Image $type)
    {
        parent::__construct($href, $type);
    }
}