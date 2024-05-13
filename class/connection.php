<?php
include 'config.php';

class Connection{
    function __construct()
    {
        
    }

    public function connect(){
        $config=new Config();
        try{
            $conn=new PDO("mysql:host=$config->host;dbname=$config->database",$config->user,$config->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(Exception $e){
            echo "connection failed!". $e->getMessage();
        }
    }
}
$connectionManager=new Connection();
$conn=$connectionManager->connect();