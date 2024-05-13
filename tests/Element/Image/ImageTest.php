<?php

namespace Tests\Element\Image;

use Phpdomizer\Element\Image\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    public function testCreateImage(): void
    {
        $img = new Image('/img/test.png', 'Teste');
        $this->assertEquals('<img src="/img/test.png" alt="Teste">', (string) $img);
    }
}
