<?php

class PostBuilderImpl implements PostBuilder{

    private $post;

    public function __construct(){
        $this->create();
    }

    public function create(): PostBuilder{
        $this->post = new Post();
        return $this;
    }

    public function setTitlePost(string $val): PostBuilder{
        $this->post->Post::setTitle($val);
        return $this;
    }
    public function setBodyPost(string $val): PostBuilder{
        $this->post->setBody($val);
        return $this;
    }
    public function setAuthorPost(string $val): PostBuilder{
        $this->post->setAuthor($val);
        return $this;
    }
    public function setCategoriesPost(array $val): PostBuilder{
        $this->post->setCategories($val);
        return $this;
    }
    public function setTagsPost(array $val): PostBuilder{
        $this->post->setTags($val);
        return $this;
    }

    public function getPost(): Post{
        $result = $this->post;
        $this->post = $this->create();
        return $result;
    }

}
