<?php

class Singleton
{
    private static $single;

    private $sum = 0;

    public function getSingle()
    {
        if (self::$single == null) {
            $class = __CLASS__;
            self::$single = new Singleton;
            return self::$single;
        } else {
            return self::$single;
        }
    }

    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    public function getSum()
    {
        return $this->sum;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

}


