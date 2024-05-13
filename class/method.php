<?php
include 'connection.php';
class Operation{
    private $_connection;

    function __construct()
    {
        $connectionClass= new Connection();
        $this->_connection=$connectionClass->connect();
    }


    public function insert($argument){
        $column='';
        $values='';
        if(empty($argument['values'])){
            echo "field in empty";
            return;
        }else{
        foreach($argument['values'] as $column_name=>$column_value){
            $column.="`". $column_name. "`,";
            $values.="'". $column_value. "',";
        }
        $sql="INSERT INTO ". $argument['table']. "(";
        $sql.= rtrim($column,','). ")";
        $sql.="VALUES (". rtrim($values,","). ")";
        echo $sql;
        $this->_connection->exec($sql);
        header("location: index.php");

    }
}
    public function get($table){
        $sql="SELECT * From $table";
        $query=$this->_connection->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($id,$name,$emailid,$password){
        $sql="UPDATE login set name='{$name}',email='{$emailid}',password='{$password}' where id='{$id}'";
        $query = $this->_connection->prepare($sql);
        $query->execute();
        // Mesage after updation
        echo "<script>alert('Record Updated successfully');</script>";
        // Code for redirection
        echo "<script>window.location.href='index.php'</script>";
}
    public function getById($id){
        $sql="SELECT * From login where id=$id";
        $query=$this->_connection->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function delete($id){
        $sql="DELETE from login where id='{$id}'";
    $query=$this->_connection->prepare($sql);
    $query->execute();
    echo"<script>alert(record deleted successfully)</script>";
    echo"<script>window.location.href='index.php'</script>";
    }
}
    