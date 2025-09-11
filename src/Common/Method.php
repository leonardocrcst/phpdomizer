<?php

namespace Phpdomizer\Common;

enum Method: string
{
    case GET = 'get';
    case POST = 'post';
    case PUT = 'put';
    case DELETE = 'delete';
    case OPTIONS = 'options';
    case PATCH = 'patch';
    case HEAD = 'head';
}
