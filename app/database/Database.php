<?php

namespace app\database;

abstract class Database {

    private $db;
    private $stmt;

    public function __construct()
    {
        try {
            $this->db = new \PDO(DB_DRIVER.":host=".DB_HOST.";dbname=". DB_NAME,DB_USER,DB_PASSWORD);
            $this->db->setAttribute(\PDO::ATTR_PERSISTENT,true);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
            return $this->db;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function query($sql)
    {
        return $this->stmt = $this->db->prepare($sql);
    }   

    public function bind($parameters, $value, $type = null)
    {

        if(is_null($type))
        {
            switch (true) {
                case is_int($value):
                    $type = \PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;
                
                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;

                default:
                    $type = \PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($parameters,$value,$type);

    }

    public function execute($data = null)
    {
        return $this->stmt->execute($data);
    }

    public function result()
    {
        $this->execute();
        return $this->stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function results()
    {
        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function lastId()
    {
        return $this->stmt->lastInsertId();
    }
}