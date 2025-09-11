<?php

namespace Phpdomizer\Component\Materializecss\Util;

readonly class ColumnSpecs
{
    public function __construct(
        public ?int $small = null,
        public ?int $medium = null,
        public ?int $large = null,
        public ?int $extraLarge = null
    ) {
    }

    public static function create(?int $small = null, ?int $medium = null, ?int $large = null, ?int $extraLarge = null): ColumnSpecs
    {
        return new self(
            $small,
            $medium,
            $large,
            $extraLarge
        );
    }

    public static function createSmall(int $small): self
    {
        return new self($small);
    }

    public static function createMedium(int $medium): self
    {
        return new self(null, $medium);
    }

    public static function createLarge(int $large): self
    {
        return new self(null, null, $large);
    }

    public static function createExtraLarge(int $extraLarge): self
    {
        return new self(null, null, null, $extraLarge);
    }

    public function __toString(): string
    {
        $specs = [];
        if (!empty($this->small)) {
            $specs[] = "s$this->small";
        }
        if (!empty($this->medium)) {
            $specs[] = "m$this->medium";
        }
        if (!empty($this->large)) {
            $specs[] = "l$this->large";
        }
        if (!empty($this->extraLarge)) {
            $specs[] = "xl$this->extraLarge";
        }
        return implode(' ', $specs);
    }
}