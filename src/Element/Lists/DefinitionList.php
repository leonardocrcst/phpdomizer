<?php

namespace Phpdomizer\Element\Lists;

use Phpdomizer\Basement\Element;

class DefinitionList extends Element
{
    public function __construct(?string $class = null)
    {
        parent::__construct('dl');
        $this->class->add($class);
    }

    public function definition(DefinitionTerm|string $term, DefinitionDescription|string $definitionDescription): DefinitionDescription
    {
        $dt = is_string($term)
            ? new DefinitionTerm($term)
            : $term;
        $dd = is_string($definitionDescription)
            ? new DefinitionDescription($definitionDescription)
            : $definitionDescription;
        $this->add($dt, $dd);
        return $dd;
    }
}