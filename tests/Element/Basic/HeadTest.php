<?php

namespace tests\Element\Basic;

use phpdomizer\Element\Basic\Head;
use PHPUnit\Framework\TestCase;

class HeadTest extends TestCase
{
    public function testCreateHead()
    {
        $head = new Head();
        $this->assertEquals('<head></head>', (string) $head);
    }
}
