<?php

namespace Phpdomizer\Element\Links;

use Phpdomizer\Common\MediaType\Text;
use Phpdomizer\Common\Target;

class Anchor extends Links
{
    public ?string $download = null;
    public ?array $ping = null;
    public ?Target $target = null;
    public ?Text $type = null;

    public function __construct(mixed $content, ?string $href = null)
    {
        //todo resolver a substituição de _blank por -blank (e correspondentes)
        parent::__construct('a');
        $this->href = $href;
        $this->add($content);
    }
}
