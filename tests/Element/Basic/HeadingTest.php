<?php

namespace tests\Element\Basic;

use phpdomizer\Element\Basic\Heading;
use PHPUnit\Framework\TestCase;

class HeadingTest extends TestCase
{
    public function testCreateHeading()
    {
        $heading = new Heading('Hello, world!');
        $this->assertEquals('<h1>Hello, world!</h1>', (string) $heading);
    }
}
