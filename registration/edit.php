<?php

 $a=$_GET['id'];
// echo $a; exit;
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'clnvikas123'; // Password
$db_name = 'registration'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = "SELECT * 
		FROM users where id=$a";
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>edit data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>user registration table</h1>
	
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			$id = $row['id'];
						
				$user_name=$row['username'];
				$email1 =$row['email'];
			    $password=$row['password'];
				//$$row['days'];
					
				
			
		}?>
	
<?php ?>
  
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="update.php">
  	<?php //include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $user_name; ?>">
  	</div>
  		<div class="input-group">
  	  <label>email</label>
  	  <input type="text" name="email" value="<?php echo $email1; ?>">
  	</div>
  	<div class="input-group">
  	  
  	  <input type="text" name="id1" value="<?php echo $id; ?>">
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
  	  <input type="password" name="password_1" value="<?php echo $password; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" value="<?php echo $password; ?>">
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




