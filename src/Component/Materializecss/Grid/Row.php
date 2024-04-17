<?php

namespace Phpdomizer\Component\Materializecss\Grid;

use Phpdomizer\Component\Materializecss\Util\ColumnSpecs;
use Phpdomizer\Element\Semantic\Div;

class Row extends Div
{
    public function __construct()
    {
        parent::__construct('row');
    }

    public function createColumn(?ColumnSpecs $specs = null): Col
    {
        $col = new Col($specs);
        $this->add($col);
        return $col;
    }
}