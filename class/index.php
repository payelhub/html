<?php
// include database connection file
include 'method.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP CRUD Operations using PDO Extension </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>PHP CRUD Operations using PDO Extension</h3> <hr />
<a href="login.php"><button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
<?php
$oppa=new Operation();
$results=$oppa->get('login');
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{
?>
<!-- Display Records -->
    <tr>
    <td><?php echo htmlentities($result->id);?></td>
    <td><?php echo htmlentities($result->name);?></td>
    <td><?php echo htmlentities($result->email);?></td>
    <td><?php echo htmlentities($result->password);?></td>
<td><a href="update.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
<td><a href="index.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
    <?php };?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<?php
if(isset($_REQUEST['del'])){
    $oppa=new Operation();
    $userid=$_GET['del'];
    $oppa->delete($userid);
    
}
?>
</body>
</html>