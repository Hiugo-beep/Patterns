<?php

class IteratorCVS implements Iterator {

    const ROW_SIZE = 4096;
    protected $filePointer = null;
    protected $currentElement = null;
    protected $rowCounter = null;
    protected $delimiter = null;

    public function __construct( $file, $delimeter = ','){
        try{
            $this->filePointer = fopen($file, 'rb');
            $this->delimiter = $delimeter;

        }catch (Exception $e){
            throw new Exception('The file "' . $file . '" cannot be read.');
        }
    }

    public function current()//возвращает текущую cvs строку в виде двумерного массива
    {
        $this->currentElement = fgetcsv($this->filePointer, self::ROW_SIZE, $this->delimiter);
        $this->rowCounter++;

        return $this->currentElement;
    }

    public function next():bool
    {
        if(is_resource($this->filePointer)){
            return !feof($this->filePointer);
        }

        return false;
    }

    public function key() //проверяет достигунт ли конец файла
    {
        return $this->rowCounter;
    }

    //проверяет, является ли следующая строчка допустимой или нет
    public function valid():bool
    {
        if(!$this-> next()){
            if(is_resource($this->filePointer)){
                fclose($this->filePointer);
            }
            return false;
        }
        return true;
    }

    public function rewind() //сбросить указатель файла
    {
        $this->rowCounter = 0;
        rewind($this->filePointer);
    }
}