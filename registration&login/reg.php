<?php
// include database connection file
require_once 'config/config.php';
if(isset($_POST['signup']))
{
// Posted Values
$name=$_POST['name1'];
$email=$_POST['email1'];
$password=$_POST['password1'];
if (empty($name) || empty($email) || empty($password)) {
    $errorMsgReg = "All fields are required.";
} else {
// Query for Insertion
$sql="INSERT INTO data(name,email,password) VALUES('$name','$email','$password')";
//Prepare Query for Execution
echo $sql;
$query = $conn->prepare($sql);
// Query Execution
if($query->execute()){
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
header("location: signup.php");
} else {
    $errorInfo = $query->errorInfo();
            $errorMsgReg = "Error inserting record: " . $errorInfo[2];
}
}
}
?>