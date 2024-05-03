<?php

namespace Phpdomizer\Component\Materializecss\Helpers;

use Phpdomizer\Component\Materializecss\Basement\ScreenSizes;

class HideOn
{
    /**
     * @var string[]
     */
    protected array $class;

    public function __construct(
        readonly public ?ScreenSizes $screenSize = null,
        readonly public ?bool $only = false,
        readonly public ?bool $up = false,
        readonly public ?bool $down = false
    ) {
        $this->class = ['hide'];
        if (!empty($this->screenSize)) {
            $this->class[] = 'on';
            $this->class[] = $this->screenSize->value;
        }
        if ($this->only) {
            $this->class[] = 'only';
        } elseif (!empty($this->up)) {
            $this->class[] = 'and-up';
        } elseif (!empty($this->down)) {
            $this->class[] = 'and-down';
        }
    }

    public static function all(): self
    {
        return new HideOn();
    }

    public static function onSmallOnly(): self
    {
        return new HideOn(ScreenSizes::SMALL, true);
    }

    public static function onLargeOnly(): self
    {
        return new HideOn(ScreenSizes::LARGE, true);
    }

    public static function onMediumOnly(): self
    {
        return new HideOn(ScreenSizes::MED, true);
    }

    public static function onMediumAndDown(): self
    {
        return new HideOn(ScreenSizes::MED, false, false, true);
    }

    public static function onMediumAndUp(): self
    {
        return new HideOn(ScreenSizes::MED, false, true);
    }

    public function __toString(): string
    {
        return implode('-', $this->class);
    }
}