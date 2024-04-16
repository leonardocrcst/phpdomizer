<?php

namespace phpdomizer\Element\Links;

use phpdomizer\Basement\Element;
use phpdomizer\Common\MediaQuery;
use phpdomizer\Element\Links\Type\ReferrerPolicy;
use phpdomizer\Element\Links\Type\Relationship;

abstract class Links extends Element
{
    public ?string $href = null;
    public ?string $hreflang = null;
    public ?MediaQuery $media = null;
    public ?ReferrerPolicy $referrerpolicy = null;
    public ?Relationship $rel = null;
}