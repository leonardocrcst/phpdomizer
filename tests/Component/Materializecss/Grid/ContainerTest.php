<?php

namespace Tests\Component\Materializecss\Grid;

use Phpdomizer\Component\Materializecss\Grid\Container;
use Phpdomizer\Component\Materializecss\Util\ColumnSpecs;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testCreateGrid()
    {
        $grid = new Container();
        $row = $grid->createRow();
        $row->createColumn(ColumnSpecs::create(12, 8, 6, 4));

        $this->assertEquals('<div class="container"><div class="row"><div class="col s12 m8 l6 xl4"></div></div></div>', (string) $grid);
    }
}
