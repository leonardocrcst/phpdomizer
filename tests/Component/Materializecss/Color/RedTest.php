<?php

namespace Tests\Component\Materializecss\Color;

use Phpdomizer\Component\Materializecss\Color\Red;
use Phpdomizer\Component\Materializecss\Color\RedText;
use Phpdomizer\Element\Semantic\Span;
use PHPUnit\Framework\TestCase;

class RedTest extends TestCase
{
    public function testMaterializeColor()
    {
        $darken = Red::darken(new Span('Test'));
        $lighten = Red::lighten(new Span('Test'));
        $accent = Red::accent(new Span('Test'));

        $this->assertEquals('<span class="red darken-1">Test</span>', (string) $darken);
        $this->assertEquals('<span class="red lighten-1">Test</span>', (string) $lighten);
        $this->assertEquals('<span class="red accent-1">Test</span>', (string) $accent);
    }

    public function testMaterializeTextColor()
    {
        $darken = RedText::darken(new Span('Test'));
        $lighten = RedText::lighten(new Span('Test'));
        $accent = RedText::accent(new Span('Test'));

        $this->assertEquals('<span class="red-text text-darken-1">Test</span>', (string) $darken);
        $this->assertEquals('<span class="red-text text-lighten-1">Test</span>', (string) $lighten);
        $this->assertEquals('<span class="red-text text-accent-1">Test</span>', (string) $accent);
    }
}
