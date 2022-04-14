<?php

interface PostBuilder {

    public function create(): PostBuilder;
    public function setTitlePost(string $val): PostBuilder;
    public function setBodyPost(string $val): PostBuilder;
    public function setAuthorPost(string $val): PostBuilder;
    public function setCategoriesPost(array $val): PostBuilder;
    public function setTagsPost(array $val): PostBuilder;

    public function getPost(): Post;
}