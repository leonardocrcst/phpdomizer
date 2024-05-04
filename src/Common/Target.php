<?php

namespace Phpdomizer\Common;

enum Target: string
{
    case BLANK = '_blank';
    case PARENT = '_parent';
    case SELF = '_self';
    case TOP = '_TOP';
}
