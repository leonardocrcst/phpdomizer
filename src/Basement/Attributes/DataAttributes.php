<?php

namespace Phpdomizer\Basement\Attributes;

trait DataAttributes
{
    /**
     * @var string[]
     */
    protected array $data = [];

    public function setDataAttribute(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    public function getDataAttributesAsString(): ?string
    {
        if (count($this->data)) {
            return implode(' ', array_map(function ($name, $value) {
                return "data-{$name}=\"{$value}\"";
            }, array_keys($this->data), array_values($this->data)));
        }
        return null;
    }
}