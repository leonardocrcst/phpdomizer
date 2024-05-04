<?php

namespace Phpdomizer\Element\Form\Type;

enum Relationship: string
{
    case EXTERNAL = 'external';
    case HELP = 'help';
    case LICENSE = 'license';
    case NEXT = 'next';
    case NOFOLLOW = 'nofollow';
    case NOOPENER = 'noopenener';
    case NOREFERRER = 'noreferrer';
    case OPENER = 'openener';
    case PREV = 'prev';
    case SEARCH = 'search';
}
