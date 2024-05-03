<?php

namespace Phpdomizer\Table\Type;

enum CellType: string
{
    case Head = 'th';
    case Body = 'td';
}
