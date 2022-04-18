<?php

class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new VideoDownloadLibrary();
    }


    public function downloadVideo(string $url): void
    {
        echo "Fetching video metadata from youtube...<br>";
        $this->youtube->fetchVideo($url);
        echo "Saving video file to a temporary file...<br>";
        $this->youtube->saveAs($url, "video.mpg");

        echo "Processing source video...<br>";
        $this->ffmpeg->open('video.mpg');
        echo "Normalizing and resizing the video to smaller dimensions...<br>";
        $this->ffmpeg->filters();
        $this->ffmpeg->resize(320, 240);
        $this->ffmpeg->synchronize();
        echo "Capturing preview image...<br>";
        echo "Done!<br>";
    }
}