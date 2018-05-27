<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>

    Flights on: <br/>
<input type="checkbox" name="days[]" value="Daily">Daily<br>
<input type="checkbox" name="days[]" value="Sunday">Sunday<br>
<input type="checkbox" name="days[]" value="Monday">Monday<br>
<input type="checkbox" name="days[]" value="Tuesday">Tuesday <br>
<input type="checkbox" name="days[]" value="Wednesday">Wednesday<br>
<input type="checkbox" name="days[]" value="Thursday">Thursday <br>
<input type="checkbox" name="days[]" value="Friday">Friday<br>
<input type="checkbox" name="days[]" value="Saturday">Saturday <br>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already registered? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>