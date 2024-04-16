<?php

namespace tests\Element\Basic;

use phpdomizer\Element\Basic\Body;
use PHPUnit\Framework\TestCase;

class BodyTest extends TestCase
{
    public function testCreateBody()
    {
        $body = new Body();
        $this->assertEquals('<body></body>', (string) $body);
    }
}
