<?php

namespace Tests\Table;

use Phpdomizer\Element\Table\Cell;
use Phpdomizer\Element\Table\Table;
use Phpdomizer\Element\Table\Type\CellType;
use PHPUnit\Framework\TestCase;

class TableTest extends TestCase
{
    public function testCreateTable()
    {
        $table = new Table('Teste');
        $table->head->row()->cell('Coluna 1', 'Coluna 2', 'Coluna 3');
        $table->body->row()->add('Valor 1', 'Valor 2', 'Valor 3');
        $table->foot->row()->cell('A', 'B', 'C');

        $this->assertEquals(
            '<table><caption>Teste</caption><thead><tr><th>Coluna 1</th><th>Coluna 2</th><th>Coluna 3</th></tr></thead><tbody><tr><td>Valor 1</td><td>Valor 2</td><td>Valor 3</td></tr></tbody><tfoot><tr><td>A</td><td>B</td><td>C</td></tr></tfoot></table>',
            (string) $table
        );
    }

    public function testCreateTableWitCellSpan()
    {
        $table = new Table('Teste');
        $table->head->row()->cell('Coluna 1', 'Coluna 2');
        $cell = new Cell(CellType::Body, 'Valor 1 spanned');
        $cell->colspan = 2;
        $table->body->row()->cell($cell);

        $this->assertEquals('<table><caption>Teste</caption><thead><tr><th>Coluna 1</th><th>Coluna 2</th></tr></thead><tbody><tr><td colspan="2">Valor 1 spanned</td></tr></tbody><tfoot></tfoot></table>', (string) $table);
    }
}
