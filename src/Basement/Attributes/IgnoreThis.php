<?php

namespace Phpdomizer\Basement\Attributes;

trait IgnoreThis
{
    protected array $ignore = [
        'tagname',
        'opening',
        'ignore',
        'children',
        'comment',
        'commentAll',
        'pushOrPull',
        'caption',
        'head',
        'body',
        'foot',
        'columnSpecs',
        'offset',
        'data',
    ];
}