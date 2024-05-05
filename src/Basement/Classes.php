<?php

namespace Phpdomizer\Basement;

class Classes
{
    private array $classes = [];

    public function add(?string ...$names): void
    {
        $classes = [
            ...$this->classes,
            ...$names
        ];
        $this->classes = array_unique(array_filter($classes));
    }

    public function rem(string ...$classes): void
    {
        $this->classes = array_filter($this->classes, function (string $class) use ($classes) {
            if (!in_array($class, $classes)) {
                return true;
            }
        });
    }

    public function __toString(): string
    {
        return count($this->classes)
            ? sprintf('class="%s"', implode(' ', $this->classes))
            : "";
    }
}