<?php

namespace Tests\Element\Links;

use Phpdomizer\Element\Links\Link;
use Phpdomizer\Element\Links\Type\Relationship;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    public function testCreateRelationship()
    {
        $link = new Link('/path/to/style.css', Relationship::STYLESHEET);
        $this->assertEquals('<link href="/path/to/style.css" rel="stylesheet">', (string)$link);
    }
}
