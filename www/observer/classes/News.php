<?php

class News implements Observable
{
    protected $post;
    protected $observer;


    public function updatePost(string $content)
    {
        $this->post[] = $content;
        $this->notifyObservers();
    }

    public function showLastPost()
    {
        echo array_slice($this->post, -1)[0];
    }


    public function addObserver(Observer $observer)
    {
        $this->observer[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observer);
        unset($this->observer[$key]);
    }

    public function notifyObservers()
    {
        foreach ($this->observer as $val) {
            $val->handleEvent($this);
        }
    }
}


