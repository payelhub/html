<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_password','password');
define('DB_DATABASE','users');
try{
    $conn=new PDO("mysql:host=".DB_SERVER.";dbname=".DB_DATABASE,DB_USER,DB_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo"Connected successfully";
}catch(PDOException $e){
    echo "connection failed: ".$e->getMessage();
}
?>