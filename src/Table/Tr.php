<?php

namespace Phpdomizer\Table;

use Phpdomizer\Basement\Element;
use Phpdomizer\Table\Type\CellType;

class Tr extends Element
{
    private CellType $type;

    public function __construct(CellType $type, ?string $class = null)
    {
        parent::__construct('tr');
        $this->type = $type;
        $this->class->add($class);
    }

    /**
     * @param mixed ...$child
     * @return Cell[]
     */
    public function add(mixed ...$child): array
    {
        return $this->cell(...$child);
    }

    /**
     * @param mixed ...$values
     * @return Cell[]
     */
    public function cell(mixed ...$values): array
    {
        return array_map(function ($value) {
            parent::add($value instanceof Cell
                ? $value
                : new Cell($this->type, $value)
            );
        }, $values);
    }
}