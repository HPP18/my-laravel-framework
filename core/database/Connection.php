<?php
class Connection
{
    public static function make($database)
    {
        try{
            return $pdo = new PDO(
                "{$database['host']};dbname={$database['dbName']}",
                "{$database['username']}",
                "{$database['password']}"
            );
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}
