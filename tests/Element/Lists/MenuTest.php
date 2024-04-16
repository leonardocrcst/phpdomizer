<?php

namespace Tests\Element\Lists;

use Phpdomizer\Element\Lists\Menu;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
    public function testCreateMenu()
    {
        $menu = new Menu();
        $menu->item('Test', 'active');
        $this->assertEquals('<menu><li class="active">Test</li></menu>', (string) $menu);
    }
}
