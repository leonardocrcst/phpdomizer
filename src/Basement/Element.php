<?php

namespace Phpdomizer\Basement;

use Phpdomizer\Basement\Attributes\DataAttributes;
use Phpdomizer\Basement\Attributes\Globals;
use Phpdomizer\Exception\InvalidChild;

abstract class Element
{
    use Globals;
    use Children;
    use Comment;
    use DataAttributes;

    public function __construct(
        public readonly string $tagname,
        protected ?bool $opening = false
    ) {
        $this->class = new Classes();
    }

    /**
     * @throws InvalidChild
     */
    public function __toString(): string
    {
        $element = sprintf(
            "%s<%s",
            $this->hasComment() ? $this->getComment() : null,
            $this->tagname);
        $attributes = $this->getAttributesAsString();
        if (!empty($attributes)) {
            $element .= " $attributes";
        }
        $dataAttributes = $this->getDataAttributesAsString();
        if (!empty($dataAttributes)) {
            $element .= " $dataAttributes";
        }
        $element .= ">";
        if (!$this->opening) {
            if ($this->hasChildren()) {
                $element .= $this->getChildrenAsString();
            }
            $element .= sprintf("</%s>", $this->tagname);
        }
        if ($this->commentAll) {
            $this->setComment($element);
            return $this->getComment();
        }
        return $element;
    }
}