<?php

namespace Tests\Element\Semantic;

use Phpdomizer\Element\Semantic\Dialog;
use PHPUnit\Framework\TestCase;

class DialogTest extends TestCase
{
    public function testDialog()
    {
        $dialog = new Dialog('Teste');
        $dialog->open();
        $this->assertEquals('<dialog open>Teste</dialog>', (string) $dialog);
    }
}
