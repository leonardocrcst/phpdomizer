<?php

namespace Phpdomizer\Element\Basic;

use Phpdomizer\Basement\Element;

class Html extends Element
{
    public function __construct(?string $lang = 'pt-br')
    {
        parent::__construct('html');
        $this->lang = $lang;
    }

    public function __toString(): string
    {
        return sprintf('<!DOCTYPE html>%s', parent::__toString());
    }
}