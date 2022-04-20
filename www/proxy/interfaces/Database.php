<?php

interface Database
{

    public function create(string $createSQLScript);

    public function drop(string $tableName);

    public function insert(string $insertSQLScript);

    public function select(string $selectSQLScript);


    // через транзакции оформляется
    public function update(string $updateSQLScript);

    public function delete(string $deleteSQLScript);
}