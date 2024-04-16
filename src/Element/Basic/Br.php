<?php

namespace phpdomizer\Element\Basic;

use phpdomizer\Basement\Element;

class Br extends Element
{
    public function __construct()
    {
        parent::__construct("br", true);
    }
}