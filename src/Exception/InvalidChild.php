<?php

namespace Phpdomizer\Exception;

use Exception;
use Phpdomizer\Basement\Element;

class InvalidChild extends Exception
{
    public function __construct(Element|string $element)
    {
        $name = is_object($element) && property_exists($element, 'name') ? $element->name : $element;
        parent::__construct("$name is not a valid child.");
    }
}