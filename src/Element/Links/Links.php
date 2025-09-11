<?php

namespace Phpdomizer\Element\Links;

use Phpdomizer\Basement\Element;
use Phpdomizer\Common\MediaQuery;
use Phpdomizer\Element\Links\Type\ReferrerPolicy;
use Phpdomizer\Element\Links\Type\Relationship;

abstract class Links extends Element
{
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?MediaQuery $media = null;
    public ?ReferrerPolicy $referrerpolicy = null;
    public ?Relationship $rel = null;
}