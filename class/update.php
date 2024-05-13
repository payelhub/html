<?php
include 'method.php';
$oppa=new Operation();
$userid=$_GET['id'];
$results=$oppa->getById($userid);
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" class="form-control" value="<?php echo htmlentities($result->name);?>" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" class="form-control" value="<?php echo htmlentities($result->email);?>" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>password</b>
<input type="password" name="password" class="form-control" value="<?php echo htmlentities($result->password);?>" required>
</div>
</div>
<?php };?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
</form>
<?php

if(isset($_POST['update']))
{
// Get the userid
$userid=$_GET['id'];
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$oppa=new Operation();
$oppa->update($userid,$name,$emailid,$password);
}
?>