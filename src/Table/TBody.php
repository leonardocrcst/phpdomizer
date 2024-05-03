<?php

namespace Phpdomizer\Table;

use Phpdomizer\Basement\Element;
use Phpdomizer\Table\Type\CellType;

class TBody extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct("tbody");
        $this->class->add($class);
    }

    public function row(?string $class = null): Tr
    {
        $tr = new Tr(CellType::Body, $class);
        parent::add($tr);
        return $tr;
    }
}