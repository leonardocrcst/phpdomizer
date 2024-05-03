<?php

namespace Tests\Component\Materializecss\Helpers;

use Phpdomizer\Component\Materializecss\Helpers\HideOn;
use Phpdomizer\Component\Materializecss\Helpers\Visibility;
use Phpdomizer\Element\Semantic\Div;
use PHPUnit\Framework\TestCase;

class HideOnTest extends TestCase
{
    public function testHideAll()
    {
        $div = Visibility::hide(
            new Div(),
            HideOn::all()
        );
        $div->add('test');
        $this->assertEquals('<div class="hide">test</div>', (string) $div);
    }

    public function testHideOnSmallOnly()
    {
        $div = Visibility::hide(
            new Div(),
            HideOn::onSmallOnly()
        );
        $div->add('test');
        $this->assertEquals('<div class="hide-on-small-only">test</div>', (string) $div);
    }

    public function testHideOnMediumOnly()
    {
        $div = Visibility::hide(
            new Div(),
            HideOn::onMediumOnly()
        );
        $div->add('test');
        $this->assertEquals('<div class="hide-on-med-only">test</div>', (string) $div);
    }

    public function testHideOnMediumAndDown()
    {
        $div = Visibility::hide(
            new Div(),
            HideOn::onMediumAndDown()
        );
        $div->add('test');
        $this->assertEquals('<div class="hide-on-med-and-down">test</div>', (string) $div);
    }

    public function testHideOnMediumAndUp()
    {
        $div = Visibility::hide(
            new Div(),
            HideOn::onMediumAndUp()
        );
        $div->add('test');
        $this->assertEquals('<div class="hide-on-med-and-up">test</div>', (string) $div);
    }

    public function testHideOnLargeOnly()
    {
        $div = Visibility::hide(
            new Div(),
            HideOn::onLargeOnly()
        );
        $div->add('test');
        $this->assertEquals('<div class="hide-on-large-only">test</div>', (string) $div);
    }
}
