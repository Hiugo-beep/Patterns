<?php

interface Observer
{
    public function handleEvent(Observable $observable);
}

