<?php

namespace Phpdomizer\Basement;

trait Comment
{
    protected string $comment;
    protected bool $commentAll = false;

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getComment(): string
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