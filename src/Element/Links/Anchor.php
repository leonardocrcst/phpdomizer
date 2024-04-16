<?php

namespace phpdomizer\Element\Links;

use phpdomizer\Common\MediaType\Text;
use phpdomizer\Element\Links\Type\Target;

class Anchor extends Links
{
    public ?string $download = null;
    public ?array $ping = null;
    public ?Target $target = null;
    public ?Text $type = null;

    public function __construct(mixed $content, ?string $href = null)
    {
        parent::__construct('a');
        $this->add($content);
    }
}