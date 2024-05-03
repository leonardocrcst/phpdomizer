<?php

namespace Tests\Table;

use Phpdomizer\Table\Cell;
use Phpdomizer\Table\Type\CellType;
use PHPUnit\Framework\TestCase;

class CellTest extends TestCase
{
    public function testCreateCellWithColspan()
    {
        $cell = new Cell(CellType::Body, 'Teste');
        $cell->colspan = 2;

        $this->assertEquals('<td colspan="2">Teste</td>', (string) $cell);
    }

    public function testCreateCellWithRowspan()
    {
        $cell = new Cell(CellType::Body, 'Teste');
        $cell->rowspan = 2;

        $this->assertEquals('<td rowspan="2">Teste</td>', (string) $cell);
    }
}
