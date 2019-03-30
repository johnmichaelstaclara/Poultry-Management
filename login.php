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
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
			<h1>Log in form</h1>
            <p>Please put your valid username and password.</p>
			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
			</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button> 
			</div>
			<p>
				Not yet a member? <a href="register.php">Sign in</a>
			</p>
		</form>
		</div>
		
		</div>
	
		
		</section>
	</center>

	<br><br><br><br>
  <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>


	


</body>
</html>