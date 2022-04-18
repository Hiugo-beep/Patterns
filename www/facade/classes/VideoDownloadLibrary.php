<?php

class VideoDownloadLibrary
{
    public function filters(): void {
        echo "      ... apply filters ... <br>";
        echo "      ... Done! <br>";
    }

    public function resize(int $a, int $b): void {
        echo "      ... Resize to" . $a. " ... <br>";
        echo "      ... Resize to" . $b. " ... <br>";
        echo "      ... Done! <br>";
    }

    public function synchronize(): void {
        echo "      ... Synchronize() ... <br>";
        echo "      ... Done! <br>";
    }

    public function frame(): void {

    }

    public function save(string $path): void {

    }

    public function open(string $name): void{
        echo "      ... Opening " . $name . " ... <br>";
        echo "      ... Done! <br>";
    }

}