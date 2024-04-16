<?php

namespace Tests\Element\Basic;

use Phpdomizer\Element\Basic\Paragraph;
use PHPUnit\Framework\TestCase;

class ParagraphTest extends TestCase
{
    public function testCreateParagraph()
    {
        $paragraph = new Paragraph('hello, world!');
        $this->assertEquals('<p>hello, world!</p>', (string) $paragraph);
    }

    public function testCreateParagraphWithClass()
    {
        $paragraph = new Paragraph('hello, world!');
        $paragraph->class->add('red');
        $this->assertEquals('<p class="red">hello, world!</p>', (string) $paragraph);
    }

    public function testCreateParagraphWithId()
    {
        $paragraph = new Paragraph('hello, world!');
        $paragraph->id = 'fake-id';
        $this->assertEquals('<p id="fake-id">hello, world!</p>', (string) $paragraph);
    }
}
