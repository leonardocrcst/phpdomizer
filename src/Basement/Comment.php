<?php

namespace Phpdomizer\Basement;

trait Comment
{
    protected string $comment;
    protected bool $commentAll;

    public function setCommnet(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getCommnet(): string
    {
        return "<!-- $this->comment -->";
    }

    public function commentAll(): void
    {
        $this->commentAll = true;
    }

    protected function hasComment(): bool
    {
        return !$this->commentAll && !empty($this->comment);
    }
}