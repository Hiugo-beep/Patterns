<?php

class PostBuilderImpl implements PostBuilder
{

    /** @var Post */
    private $post;

    public function __construct()
    {
        $this->create();
    }

    public function create(): Post
    {
        $this->post = new Post();
        return $this->post;
    }

    public function setTitlePost(string $val): PostBuilder
    {
        $this->post->setTitle($val);
        return $this;
    }

    public function setBodyPost(string $val): PostBuilder
    {
        $this->post->setBody($val);
        return $this;
    }

    public function setAuthorPost(string $val): PostBuilder
    {
        $this->post->setAuthor($val);
        return $this;
    }

    public function setCategoriesPost(array $val): PostBuilder
    {
        $this->post->setCategories($val);
        return $this;
    }

    public function setTagsPost(array $val): PostBuilder
    {
        $this->post->setTags($val);
        return $this;
    }

    public function getPost() :Post
    {
        $result = $this->post;
        $this->post = $this->create();
        return $result;
    }
}