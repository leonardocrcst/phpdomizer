<?php

namespace Tests\Component\Materializecss\Grid;

use Phpdomizer\Component\Materializecss\Grid\Col;
use Phpdomizer\Component\Materializecss\Grid\Container;
use Phpdomizer\Component\Materializecss\Util\ColumnSpecs;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    public function testCreateGrid()
    {
        $grid = new Container();
        $row = $grid->createRow();
        $col = $row->createColumn(ColumnSpecs::create(12, 8, 6, 4));
        $col->offset(ColumnSpecs::createMedium(3), ColumnSpecs::createSmall(1));
        $col->pull(ColumnSpecs::createLarge(2));

        $this->assertEquals('<div class="container"><div class="row"><div class="col s12 m8 l6 xl4 pull-l2 offset-m3 offset-s1"></div></div></div>', (string) $grid);
    }

    public function testCreateColWithPush()
    {
        $col = new Col();
        $col->push(ColumnSpecs::createExtraLarge(4));

        $this->assertEquals('<div class="col push-xl4"></div>', (string) $col);
    }
}
