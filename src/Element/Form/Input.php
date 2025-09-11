<?php

namespace Phpdomizer\Element\Form;

use Phpdomizer\Basement\Element;
use Phpdomizer\Element\Form\Type\InputType;

abstract class Input extends Element
{
    public function __construct(
        protected InputType $type,
        protected string $name,
        protected mixed $value = null,
        ?string $class = null
    ) {
        parent::__construct('input');
        $this->class->add($class);
    }
}