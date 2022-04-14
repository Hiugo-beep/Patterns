<?php

class Post{

    /*
     * @var string
     */
    public $title;
    /*
     * @var string
     */
    public $body;
    /*
     * @var string
     */
    public $author;
    /*
     * @var array
     */
    public $tags = [];
    /*
     * @var array
     */
    public $categories = [];

    /*
    public function __construct($title, $body, $author, $tags, $categories) {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->tags = $tags;
        $this->categories = $categories;
    }
    */

    public function setTitle(string $title): Post {
        $this->title = $title;
        return $this;
    }
    public function getTitle() :string{
        return $this->title;
    }
    public function setBody(string $body){
        $this->body = $body;
    }
    public function getBody() :string {
        return $this->body;
    }
    public function setAuthor(string $author){
        $this->author = $author;
    }
    public function getAuthor():string {
        return $this->author;
    }
    public function setTags(array $tags){
        $this->tags = $tags;
    }
    public function getTags():array {
        return $this->tags;
    }
    public function setCategories(array $categories){
        $this->categories = $categories;
    }
    public function getCategories():array {
        return $this->categories;
    }

}