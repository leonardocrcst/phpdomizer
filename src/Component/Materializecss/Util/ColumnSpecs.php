<?php

namespace Phpdomizer\Component\Materializecss\Util;

readonly class ColumnSpecs
{
    public function __construct(
        public ?int $small = 1,
        public ?int $medium = 1,
        public ?int $large = 1,
        public ?int $extraLarge = 1
    ) {
    }

    public static function create(?int $small = 1, ?int $medium = 1, ?int $large = 1, ?int $extraLarge = 1): ColumnSpecs
    {
        return new self(
            $small,
            $medium,
            $large,
            $extraLarge
        );
    }

    public function __toString(): string
    {
        $specs = [];
        if ($this->small > 0) {
            $specs[] = "s$this->small";
        }
        if ($this->medium > 0) {
            $specs[] = "m$this->medium";
        }
        if ($this->large > 0) {
            $specs[] = "l$this->large";
        }
        if ($this->extraLarge > 0) {
            $specs[] = "xl$this->extraLarge";
        }
        return implode(' ', $specs);
    }
}