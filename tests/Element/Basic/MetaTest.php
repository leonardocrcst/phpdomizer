<?php

namespace Tests\Element\Basic;

use Phpdomizer\Element\Basic\Meta;
use Phpdomizer\Element\Basic\Type\HttpEquiv;
use Phpdomizer\Element\Basic\Type\MetaType;
use PHPUnit\Framework\TestCase;

class MetaTest extends TestCase
{
    public function testCreateCharset()
    {
        $charset = new Meta(MetaType::CHARSET, 'UTF-8');
        $this->assertEquals('<meta charset="UTF-8">', (string) $charset);
    }

    public function testCreateHttpEquiv()
    {
        $equiv = new Meta(MetaType::HTTP_EQUIV, HttpEquiv::REFRESH);
        $equiv->content(0, 'url=https://google.com');
        $this->assertEquals('<meta http-equiv="refresh" content="0; url=https://google.com"/>', (string) $equiv);
    }
}
