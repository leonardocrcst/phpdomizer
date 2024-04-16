<?php

namespace Phpdomizer\Element\Basic;

use Phpdomizer\Basement\Element;

class Br extends Element
{
    public function __construct()
    {
        parent::__construct("br", true);
    }
}