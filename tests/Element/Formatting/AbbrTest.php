<?php

namespace Tests\Element\Formatting;

use Phpdomizer\Element\Formatting\Abbr;
use PHPUnit\Framework\TestCase;

class AbbrTest extends TestCase
{
    public function testAbbr()
    {
        $abbr = new Abbr('WWW', 'World Wide Web');
        $this->assertEquals('<abbr title="WWW">World Wide Web</abbr>', (string)$abbr);
    }
}
