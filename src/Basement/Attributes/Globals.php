<?php
/** @noinspection PhpUnused */

namespace Phpdomizer\Basement\Attributes;

use Phpdomizer\Basement\Classes;
use UnitEnum;

trait Globals
{
    public ?string $accesskey = null;
    public readonly ?Classes $class;
    public ?bool $contenteditable = false;
    public ?string $id = null;
    public ?string $dir = null;
    public ?string $lang = null;

    protected function getAttributesAsString(): ?string
    {
        $attrs = [];
        foreach (get_class_vars(Globals::class) as $name => $value) {
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
                    is_numeric($value) => "$name=$value",
                    is_array($value) => sprintf('%s="%s"', $name, implode(' ', $value)),
                    default => "$name=\"$value\"",
                };
            }
        }
        return count($attrs) ? implode(' ', $attrs) : null;
    }
}