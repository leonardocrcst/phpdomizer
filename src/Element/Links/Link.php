<?php

namespace Phpdomizer\Element\Links;

use Phpdomizer\Common\MediaType\Image;
use Phpdomizer\Common\MediaType\Text;
use Phpdomizer\Element\Links\Type\Relationship;

class Link extends Links
{
    public ?string $crossorigin = null;
    public ?string $href = null;
    public Text|string|null $type = null;

    public function __construct(string $href, Relationship $relationship, Image|Text $type = null)
    {
        parent::__construct('link', true);
        $this->rel = $relationship;
        $this->type = $type;
    }
}