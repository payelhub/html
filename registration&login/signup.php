<?php
include'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="signup">
<h3>Registration</h3>
<form method="post" action="reg.php" name="signup">
<label>Name</label>
<input type="text" name="name1"  />
<label>Email</label>
<input type="text" name="email1" />
<label>Password</label>
<input type="password" name="password1" />
<div class="errorMsg"><?php echo $errorMsgReg; ?></div>
<input type="submit" class="button" name="signup" value="Signup">
</form>
</div>
<div id="login">
<h3>Login</h3>
<form method="post" action="log.php" name="login">
<label>Email</label>
<input type="text" name="email2" >
<label>Password</label>
<input type="password" name="password2" >
<!--<div class="errorMsg"><?php echo $errorMsgLogin; ?></div>-->
<input type="submit" class="button" name="login" value="Login">
</form>
</div>
</body>
</html>