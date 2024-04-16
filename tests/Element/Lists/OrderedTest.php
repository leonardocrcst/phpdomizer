<?php

namespace Tests\Element\Lists;

use Phpdomizer\Element\Lists\Ordered;
use PHPUnit\Framework\TestCase;

class OrderedTest extends TestCase
{
    public function testCreateOrdered()
    {
        $ol = new Ordered();
        $ol->item('Test');
        $this->assertEquals('<ol><li>Test</li></ol>', (string) $ol);
    }
}
