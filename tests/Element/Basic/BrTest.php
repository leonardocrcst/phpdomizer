<?php

namespace Tests\Element\Basic;

use Phpdomizer\Element\Basic\Br;
use PHPUnit\Framework\TestCase;

class BrTest extends TestCase
{
    public function testCreateBr()
    {
        $br = new Br();
        $this->assertEquals('<br>', (string) $br);
    }
}
