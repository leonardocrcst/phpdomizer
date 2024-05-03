<?php

namespace Phpdomizer\Basement\Attributes;

use UnitEnum;

trait GetAttributesAsString
{
    use IgnoreThis;

    protected function getAttributesAsString(): ?string
    {
        $attrs = [];
        foreach (get_object_vars($this) as $name => $value) {
            if (in_array($name, $this->ignore)) {
                continue;
            }
            $value = $this->$name;
            if (is_object($value) && method_exists($value, '__toString')) {
                $attr = $value->__toString();
                if (!empty($attr)) {
                    $attrs[] = $attr;
                }
            }
            if ($value instanceof UnitEnum && property_exists($value, 'value')) {
                $attrs[] = sprintf('%s="%s"', $name, $value->value);
            }
            if (!is_object($value) && !empty($value)) {
                $attrs[] = match ($value) {
                    is_bool($value) => $name,
                    is_numeric($value) || is_int($value) => "$name=$value",
                    is_array($value) => sprintf('%s="%s"', $name, implode(' ', $value)),
                    default => "$name=\"$value\"",
                };
            }
        }
        return count($attrs)
            ? str_replace('_', '-', implode(' ', $attrs))
            : null;
    }
}