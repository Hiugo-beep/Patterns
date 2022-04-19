<?php

class YouTube
{

    private $videoPath;

    public function __construct(string $url)
    {
        $this->videoPath = $url;
    }

    public function fetchVideo($url): void
    {
        echo "      ... Fetching " . $url . " ... <br>";
        echo "      ... Done! <br>";
    }

    public function saveAs(string $path, string $name): void
    {
        echo "      ... Save " . $path . " as " . $name . " ... <br>";
        echo "      ... Done! <br>";
    }


}