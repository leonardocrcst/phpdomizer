<?php

namespace Phpdomizer\Table;

use Phpdomizer\Basement\Element;
use Phpdomizer\Table\Type\CellType;

class THead extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct("thead");
        $this->class->add($class);
    }

    public function row(?string $class = null): Tr
    {
        $tr = new Tr(CellType::Head, $class);
        parent::add($tr);
        return $tr;
    }
}