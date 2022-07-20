<?php


namespace App\models;

use app\database\Database;

class Repository extends Database
{
    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->primary_key}={$id}";
        $this->query($sql);
        return $this->result();
    }

    public function findBy($value,$field)
    {

        $sql = "SELECT * FROM {$this->table} WHERE {$field}=:{$field}";
        $this->query($sql);
        $this->bind(':'.$field,$value);
        return $this->results();
    }

}