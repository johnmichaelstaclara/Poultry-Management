<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Poultry Management</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
 <header class="main">
  	<center><h1>&copy;POULTRY MANAGEMENT</h1></center>
  	 <img src="lol.png" class="avatar3">
     <nav class="col-sm-12 text-right"> 
<a href="home.php" style="color:white;">Home</a>
      </nav>
    </div>
  </header>
<br>     
         <center><img src="wew.jpg" class="avatar1"></center>
         <center>
		<section class="main">
        <div class="row">
		 <div class="col-sm-12">
		<form method="post" action="register.php">
		    <h1>Registration form</h1>
			<p>Please fill up carefully.</p>
			<?php include('errors.php'); ?>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
			</div>
			<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button> 
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
		</div>
	    </div>
		</section>
	</center>
		
     <br><br>
    <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>
	


</body>
</html>