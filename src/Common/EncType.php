<?php

namespace Phpdomizer\Common;

enum EncType: string
{
    case URL_ENCODED = 'application/x-www-form-urlencoded';
    case MULTIPART = 'multipart/form-data';
    case TEXT_PLAIN = 'text/plain';
}
