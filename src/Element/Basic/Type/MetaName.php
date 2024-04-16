<?php

namespace Phpdomizer\Element\Basic\Type;

use UnitEnum;

enum MetaName: string
{
    case APPLICATION_NAME = 'application-name';
    case AUTHOR = 'author';
    case DESCRIPTION = 'description';
    case GENERATOR = 'generator';
    case KEYWORDS = 'keywords';
    case VIEWPORT = 'viewport';

    public static function isMetaName(UnitEnum $enum): bool
    {
        if (!isset($enum->value)) {
            return false;
        }
        $name = $enum->name;
        return isset(self::$$name);
    }
}
