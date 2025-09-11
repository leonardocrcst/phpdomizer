<?php

namespace Tests\Basement;

use Phpdomizer\Basement\Classes;
use PHPUnit\Framework\TestCase;

class ClassesTest extends TestCase
{
    public function testAddClasses()
    {
        $class = new Classes();
        $class->add('red', 'text-center');
        $this->assertEquals('class="red text-center"', (string) $class);
    }

    public function testRemClasses()
    {
        $class = new Classes();
        $class->add('green', 'right', 'float');
        $class->rem('green', 'float');
        $this->assertEquals('class="right"', (string) $class);
    }
}
