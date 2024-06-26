<?php

namespace Tests\Element\Links;

use Phpdomizer\Element\Links\Anchor;
use PHPUnit\Framework\TestCase;

class AnchorTest extends TestCase
{
    function testCreateAnchor(): void
    {
        $anchor = new Anchor('Teste', '/teste');
        $this->assertEquals('<a href="/teste">Teste</a>', (string) $anchor);
    }
}
