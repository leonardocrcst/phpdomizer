<?php

namespace phpdomizer\Element\Links\Type;

enum Target: string
{
    case BLANK = '_blank';
    case PARENT = '_parent';
    case SELF = '_self';
    case TOP = '_TOP';
}
