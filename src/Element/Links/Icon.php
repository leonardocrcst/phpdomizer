<?php

namespace Phpdomizer\Element\Links;

use Phpdomizer\Common\MediaType\Image;
use Phpdomizer\Element\Links\Type\Relationship;

class Icon extends Link
{
    public ?string $sizes = null;

    public function __construct(string $href, Image $type)
    {
        parent::__construct($href, Relationship::ALTERNATE, $type);
    }
}