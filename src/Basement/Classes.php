<?php

namespace phpdomizer\Basement;

class Classes
{
    private array $classes = [];

    public function add(string ...$names): void
    {
        $classes = [
            ...$this->classes,
            ...$names
        ];
        $this->classes = array_unique($classes);
    }

    public function __toString(): string
    {
        return count($this->classes)
            ? sprintf('class="%s"', implode(' ', $this->classes))
            : "";
    }
}