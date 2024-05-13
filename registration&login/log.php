<?php 
session_start();
include 'config/config.php';
if(isset($_POST['login'])){
    $email=$_POST['email2'];
    $password=$_POST['password2'];
    $sql="SELECT * FROM data where email='{$email}' AND password='{$password}'";
    $query=$conn->prepare($sql);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount()>0){
        $_SESSION['useremail']=$_POST['email2'];
        echo "<script type='text/javascript'>document.location='signin.php';</script>";
    }else{
        echo "<script>alert('Invalid email and password')</script>";
    }
}