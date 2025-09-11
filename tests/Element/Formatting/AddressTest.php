<?php

namespace Tests\Element\Formatting;

use Phpdomizer\Element\Formatting\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    public function testAddress()
    {
        $address = new Address('Teste', 'red');
        $this->assertEquals('<address class="red">Teste</address>', (string)$address);
    }
}
