<?php

namespace Tests\Element\Basic;

use Phpdomizer\Element\Basic\Meta;
use Phpdomizer\Element\Basic\Type\HttpEquiv;
use Phpdomizer\Element\Basic\Type\MetaName;
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
        $this->assertEquals('<meta content="0; url=https://google.com" http-equiv="refresh">', (string) $equiv);
    }

    public function testCreateMetaName()
    {
        $name = new Meta(MetaType::NAME, MetaName::AUTHOR);
        $name->content('Teste');
        $this->assertEquals('<meta content="Teste" name="author">', (string) $name);
    }
}
