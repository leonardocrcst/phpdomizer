<?php

namespace Phpdomizer\Table;

use Phpdomizer\Basement\Element;

class Table extends Element
{
    readonly public Caption $caption;
    readonly public THead $head;
    readonly public TBody $body;
    readonly public TFoot $foot;

    public function __construct(?string $caption = null, ?string $class = null)
    {
        parent::__construct("table");
        $this->class->add($class);
        if (!empty($caption)) {
            $this->caption = new Caption($caption);
            parent::add($this->caption);
        }
        $this->head = new THead();
        $this->body = new TBody();
        $this->foot = new TFoot();
        parent::add($this->head, $this->body, $this->foot);
    }
}