<?php
/** @noinspection PhpUnused */

namespace Phpdomizer\Basement\Attributes;

use Phpdomizer\Basement\Classes;

trait Globals
{
    use GetAttributesAsString;

    public ?string $accesskey = null;
    public readonly ?Classes $class;
    public ?bool $contenteditable = false;
    public ?string $id = null;
    public ?string $dir = null;
    public ?string $lang = null;
    public ?string $title = null;
}