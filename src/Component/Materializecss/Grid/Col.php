<?php

namespace Phpdomizer\Component\Materializecss\Grid;

use Phpdomizer\Component\Materializecss\Util\ColumnSpecs;
use Phpdomizer\Element\Semantic\Div;

class Col extends Div
{
    protected ColumnSpecs $columnSpecs;
    protected string $pushOrPull;

    public function __construct(?ColumnSpecs $specs = null)
    {
        parent::__construct('col');
        if (!empty($specs)) {
            $this->setColumnSpecs($specs);
        }
    }

    public function setColumnSpecs(ColumnSpecs $specs): void
    {
        $this->columnSpecs = $specs;
    }

    public function __toString(): string
    {
        !empty($this->columnSpecs)
            ? $this->class->add((string) $this->columnSpecs)
            : $this->class->add((string) ColumnSpecs::create());
        if (!empty($this->pushOrPull)) {
            $this->class->add($this->pushOrPull);
        }
        return parent::__toString();
    }

    public function push(ColumnSpecs $specs): void
    {
        $this->pushOrPull = sprintf('push-%s',$specs);
    }

    public function pull(ColumnSpecs $specs): void
    {
        $this->pushOrPull = sprintf('pull-%s',$specs);
    }
}