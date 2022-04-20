<?php

class DatabaseProxy implements Database
{
    protected $databaseImpl = null;

    function __construct()
    {
        $this->databaseImpl = new DatabaseImpl();
    }

    public function create(string $createSQLScript)
    {
        echo "Proxy: Create function from DatabaseProxy<br>";
        $this->databaseImpl->create($createSQLScript);
    }

    public function drop(string $tableName)
    {
        echo "Proxy: Drop function from DatabaseProxy<br>";
        $this->databaseImpl->drop($tableName);
    }

    public function insert(string $insertSQLScript)
    {
        echo "Proxy: Insert function from DatabaseProxy<br>";
        $this->databaseImpl->insert($insertSQLScript);
    }

    public function select(string $selectSQLScript)
    {
        echo "Proxy: Select function from DatabaseProxy<br>";
        $this->databaseImpl->select($selectSQLScript);
    }

    public function update(string $updateSQLScript)
    {
        echo "Proxy: Update function from DatabaseProxy<br>";
        $this->databaseImpl->update($updateSQLScript);
    }

    public function delete(string $deleteSQLScript)
    {
        echo "Proxy: Delete function from DatabaseProxy<br>";
        $this->databaseImpl->delete($deleteSQLScript);
    }
}
