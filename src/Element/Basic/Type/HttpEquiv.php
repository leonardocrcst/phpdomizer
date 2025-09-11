<?php

namespace Phpdomizer\Element\Basic\Type;

use UnitEnum;

enum HttpEquiv: string
{
    case SECUTITY_POLICY = 'content-security-policy';
    case CONTENT_TYPE = 'content-type';
    case DEFAULT_STYLE = 'default-style';
    case REFRESH = 'refresh';

    public static function isHttpEquiv(UnitEnum $enum): bool
    {
        if (!isset($enum->value)) {
            return false;
        }
        $name = $enum->name;
        return isset(self::$$name);
    }
}
