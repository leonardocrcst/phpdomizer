<?php

namespace Phpdomizer\Common;

class MediaQuery
{
    private array $queries = [];

    public function __toString(): string
    {
        return count($this->queries)
            ? implode("", $this->queries)
            : "";
    }
}