<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CURD Operation using PDO Extension  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>password</b>
<input type="password" name="password" class="form-control"  required>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div>
</form>
</div>
</div>

<?php
// include database connection file
require_once'config/config.php';
if(isset($_POST['insert']))
{
// Posted Values
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
// Query for Insertion
$sql="INSERT INTO login(name,email,password) VALUES('$name','$emailid','$password')";
//Prepare Query for Execution
$query = $conn->prepare($sql);
// Query Execution
$query->execute();
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
header("location: index.php");
}
?>
</body>
</html>