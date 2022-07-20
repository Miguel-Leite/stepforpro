<?php


namespace app\repository;

use app\database\Database;

class Repository extends Database
{
    
    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $this->query($sql);
        return $this->results();
    }

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
        return $this->result();
    }

}