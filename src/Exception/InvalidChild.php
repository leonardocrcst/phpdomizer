<?php

namespace phpdomizer\Exception;

use Exception;
use phpdomizer\Basement\Element;

class InvalidChild extends Exception
{
    public function __construct(Element|string $element)
    {
        $name = is_object($element) && property_exists($element, 'name') ? $element->name : $element;
        parent::__construct("$name is not a valid child.");
    }
}