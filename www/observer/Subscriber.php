<?php

class Subscriber implements Observer{


    private $newspaper;
    public function __construct(){}

    public function subscribeOn( Observable $newspaper){
        $this->newspaper = $newspaper;
        $newspaper->addObserver($this);
    }
    public function unsubscribeFrom(Observable $newspaper){
        $this->newspaper = null;
        $newspaper->removeObserver($this);
    }

    public function handleEvent(Observable $observable){
        $this->reactToNews($observable);
    }
    public function reactToNews($observable){
        echo "I just read the new posts <br>";
        if(!empty($this->newspaper)){
            $this->newspaper->showLastPost();
        }
        echo  " <br><br>";
    }
}
