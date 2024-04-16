<?php

namespace Phpdomizer\Basement;

use Phpdomizer\Exception\InvalidChild;

trait Children
{
    protected array $children = [];

    public function add(mixed ...$child): mixed
    {
        $this->children = array_filter([
            ...$this->children,
            ...$child
        ]);
        return $this->children[count($this->children) - 1];
    }

    public function hasChildren(): bool
    {
        return count($this->children) > 0;
    }

    /**
     * @throws InvalidChild
     */
    public function getChildrenAsString(): string
    {
        $children = [];
        foreach ($this->children as $child) {
            if (is_object($child) && method_exists($child, '__toString')) {
                $children[] = (string) $child;
            } else if (is_numeric($child) || is_string($child)) {
                $children[] = $child;
            } else {
                throw new InvalidChild($child);
            }
        }
        return implode("", $children);
    }
}