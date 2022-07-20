<?php

namespace app\database;

class QueryBuilder {


    public static function insert(array $data, string $table):string
    {
        $sql = 'INSERT `'.$table.'` (' . self::fields($data) . ') VALUES (' . self::insertedPlaceHolders($data) . ')';
        return $sql;
    }

    public static function fields(array $data = []):string
    {
        $placeholders = array_keys($data);

        $sql = "";

        for ($i = 0;$i < count($placeholders);$i++)
        {
            if ($i > 0) {
                $sql .= ",";
            }

            $sql .= "`" . $placeholders[$i] . "`";
        }

        return $sql;
    }


    public static function insertedPlaceHolders(array $data = []):string
    {
        $placeholders = array_keys($data);
        $sql = '';
        for ($i = 0; $i < count($placeholders);$i++)
        {
            if ($i > 0) {
                $sql .= ",";
            }

            $sql .= ":" . $placeholders[$i];
        }

        return $sql;
    }
}