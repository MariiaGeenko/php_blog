<?php

namespace Ember\Blog\Blog;

class Post
{
    private ?int $id;
    private ?int $user_id;
    private string $text;

    public function __construct(
        int $user_id = null,
        string $text
    )
    {
        $this->text = $text;
        $this->user_id = $user_id;
    }

    public function __toString()
    {
        return $this->text;
    }
}