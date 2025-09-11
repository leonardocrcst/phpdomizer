<?php

namespace Phpdomizer\Component\Materializecss\Grid;

use Phpdomizer\Element\Semantic\Div;

class Container extends Div
{
    public function __construct()
    {
        parent::__construct('container');
    }

    public function createRow(): Row
    {
        $row = new Row();
        $this->add($row);
        return $row;
    }
}