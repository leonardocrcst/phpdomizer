<?php

namespace Phpdomizer\Common\MediaType;

enum Text: string
{
    case HTML = 'text/html';
    case XML = 'text/xml';
    case JAVASCRIPT = 'text/javascript';
    case CSS = 'text/css';
    case CSV = 'text/csv';
}
