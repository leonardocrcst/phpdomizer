<?php

namespace Phpdomizer\Element\Form;

use Phpdomizer\Basement\Element;
use Phpdomizer\Common\EncType;
use Phpdomizer\Common\Method;
use Phpdomizer\Common\OnOff;
use Phpdomizer\Common\Target;
use Phpdomizer\Element\Form\Type\Relationship;

class Form extends Element
{
    public ?string $accept_charset = null;
    public ?string $action = null;
    public ?OnOff $autocomplete = null;
    public ?EncType $enctype = null;
    public ?Method $method = null;
    public ?string $name = null;
    public ?bool $novalidate = null;
    public ?Relationship $relationship = null;
    public ?Target $target = null;
}