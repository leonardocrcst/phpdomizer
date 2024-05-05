<?php

namespace Tests\Element\Semantic;

use Phpdomizer\Element\Basic\Paragraph;
use Phpdomizer\Element\Semantic\Details;
use PHPUnit\Framework\TestCase;

class DetailsTest extends TestCase
{
    public function testDetails()
    {
        $details = new Details('Detalhes', new Paragraph('Conteúdo detalhado'),'red');
        $this->assertEquals('<details class="red"><summary>Detalhes</summary><p>Conteúdo detalhado</p></details>', (string)$details);
    }
}
