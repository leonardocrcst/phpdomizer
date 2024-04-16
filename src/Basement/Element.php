<?php

namespace Phpdomizer\Basement;

use Phpdomizer\Basement\Attributes\Globals;
use Phpdomizer\Exception\InvalidChild;

class Element
{
    use Globals;
    use Children;

    public function __construct(
        public readonly string $name,
        protected ?bool $opening = false
    ) {
        $this->class = new Classes();
    }

    /**
     * @throws InvalidChild
     */
    public function __toString(): string
    {
        $element = sprintf("<%s", $this->name);
        $attributes = $this->getAttributesAsString();
        if (!empty($attributes)) {
            $element .= " $attributes";
        }
        $element .= ">";
        if (!$this->opening) {
            if ($this->hasChildren()) {
                $element .= $this->getChildrenAsString();
            }
            $element .= sprintf("</%s>", $this->name);
        }
        return $element;
    }
}