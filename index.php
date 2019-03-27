<?php include('server.php'); 

   if (empty($_SESSION['username'])){
	   header('location: login.php');
   }
   
  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

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

        <section class="main">
       <div class="row">
       	<div class="col-sm-4">

	  <form>
        
       
		<h3>Welcome to <br>your poultry management</h3>

             <nav class="col-sm-8 text-left"> 	 
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'" style="color:white;">Logout</a></p>
		 <?php endif ?> 
		</nav>

        <div class="btn-group-vertical">
		<a href="home.php" class="btn">Home</a>
		<a href="add.php" class="btn">Flock Mangement</a>
		<a href="sale1.php" class="btn">Sales</a>
		<a href="item1.php" class="btn">Item</a>
		<a href="feed1.php" class="btn">Feeds</a>
		<a href="cust1.php" class="btn">Customer</a>
<<<<<<< HEAD
		<a href="add.php" class="btn">Medication</a>
=======
		<a href="med1.php" class="btn">Medication</a>
		<a href="order1.php" class="btn">Order</a>
		<a href="egg1.php" class="btn">Eggs</a>
		<a href="report.php" class="btn">Reports</a>

>>>>>>> New files
        </div>

       



    </form>
</div>


    <form>

		<p>
		
           <h1>POULTRY MANAGEMENT</h1>

      Poultry management usually refers to the husbandry practices or production techniques that help to maximize the efficiency of production. Sound management practices are very essential to optimize production. Scientific poultry management aims at maximizing returns with minimum investment.<br><br>

           <h1>Brooder Management</h1>
      Brooder house: Brooder house should be draft-free, rain-proof and protected against predators. Brooding pens should have windows with wire mesh for adequate ventilation. Too dusty environment irritates the respiratory tract of the chicks. Besides dust is one of the vehicles of transmission of diseases. Too much moisture causes ammonia fumes which irritate the respiratory tract and eyes. Good ventilation provides a comfortable environment without draft.<br><br><br>
		<a class="nav-link fa fa-google" href="http://agritech.tnau.ac.in/animal_husbandry/ani_chik_poultry%20mgt.html" style="color: white; "> Google</a>
		</p>


</div>
</section>

 <br><br>s
     <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
   <p align="right"><a class="nav-link fa fa-google" href="http://agritech.tnau.ac.in/animal_husbandry/ani_chik_poultry%20mgt.html" style="color: white; "> Google</a></p>
    </footer>
	


</body>
</html>