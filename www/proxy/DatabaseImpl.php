<?php

class DatabaseImpl implements Database
{

    public function create(string $createSQLScript)
    {
        echo "Create function from DatabaseImpl<br><br>";
    }

    public function drop(string $tableName)
    {
        echo "Drop function from DatabaseImpl<br><br>";
    }

    public function insert(string $insertSQLScript)
    {
        echo "Insert function from DatabaseImpl<br><br>";
    }

    public function select(string $selectSQLScript)
    {
        echo "Select function from DatabaseImpl<br><br>";
    }

    public function update(string $updateSQLScript)
    {
        echo "Update function from DatabaseImpl<br><br>";
    }

    public function delete(string $deleteSQLScript)
    {
        echo "Delete function from DatabaseImpl<br><br>";
    }
}
