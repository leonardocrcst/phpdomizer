<?php

namespace tests\Element\Basic;

use phpdomizer\Element\Basic\Br;
use PHPUnit\Framework\TestCase;

class BrTest extends TestCase
{
    public function testCreateBr()
    {
        $br = new Br();
        $this->assertEquals('<br>', (string) $br);
    }
}
