<?php

namespace Tests\Element\Lists;

use Phpdomizer\Element\Lists\DefinitionList;
use PHPUnit\Framework\TestCase;

class DefinitionListTest extends TestCase
{
    public function testCreateDefinitionList()
    {
        $definitionList = new DefinitionList();
        $definitionList->definition('FYI', 'For your information');
        $this->assertEquals('<dl><dt>FYI</dt><dd>For your information</dd></dl>', (string) $definitionList);
    }
}
