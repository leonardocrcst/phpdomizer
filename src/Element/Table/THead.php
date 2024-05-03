<?php

namespace Phpdomizer\Element\Table;

use Phpdomizer\Basement\Element;
use Phpdomizer\Element\Table\Type\CellType;

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