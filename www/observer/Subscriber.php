<?php

class Subscriber implements Observer
{


    public function __construct()
    {
    }

    public function handleEvent(Observable $observable)
    {
        $this->reactToNews($observable);
    }

    private function reactToNews(Observable $observable)
    {
        echo "I just read the new posts <br>";
        if (!empty($observable)) {
            $observable->showLastPost();
        }
        echo " <br><br>";
    }
}
