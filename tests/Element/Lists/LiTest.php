<?php

namespace Tests\Element\Lists;

use Phpdomizer\Element\Lists\Li;
use PHPUnit\Framework\TestCase;

class LiTest extends TestCase
{
    public function testCreateItem()
    {
        $li = new Li();
        $this->assertEquals('<li></li>', (string) $li);
    }
}
