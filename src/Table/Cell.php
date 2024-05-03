<?php

namespace Phpdomizer\Table;

use Phpdomizer\Basement\Element;
use Phpdomizer\Table\Type\CellType;

class Cell extends Element
{
    use CellSpan;

    public function __construct(CellType $type, mixed $content = null, ?string $class = null)
    {
        parent::__construct($type->value);
        $this->class->add($class);
        $this->add($content);
    }
}