<?php

namespace Phpdomizer\Element\Form;

use Phpdomizer\Element\Form\Type\InputType;

class Button extends Input
{
    public function __construct(string $name, string $caption, mixed $value = null)
    {
        parent::__construct(InputType::BUTTON, $name, $value);
        $this->add($caption);
    }
}