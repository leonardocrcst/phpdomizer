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

    public function definition(DefinitionTerm $term, DefinitionDescription $definitionDescription): DefinitionDescription
    {
        $this->add($term, $definitionDescription);
        return $definitionDescription;
    }
}