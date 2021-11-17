<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function findId($id, $table)
    {
        $statement = $this->pdo->prepare("select id from $table WHERE id=$id");
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($dataArr, $table)
    {
        $getDataKeys = array_keys($dataArr);
        $cols = implode(",", $getDataKeys);
        $questionMark = "";
        foreach ($getDataKeys as $key) {
            $questionMark .= "?,";
        }
        $questionMark = rtrim($questionMark, ",");
        $sql = "insert into $table ($cols) value ($questionMark)";
        $statement = $this->pdo->prepare($sql);

        $getDataValues = array_values($dataArr);
        $statement->execute($getDataValues);
    }
    public function update($dataArr, $id, $table)
    {
        $keys = array_keys($dataArr);
        $questionMark = "";
        foreach ($keys as $key){
            $questionMark .= $key."=?,";
        }
        $questionMark = rtrim($questionMark,",");
        $sql = "update $table set $questionMark where id=$id";
        $statement = $this->pdo->prepare($sql);
//        dd($sql);
        $values = array_values($dataArr);
        $statement->execute($values);
    }
    public function delete($id, $table)
    {
        $statement = $this->pdo->prepare("delete from $table where id=$id");
        $statement->execute();
    }
}
