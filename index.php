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

</head>
<body>

 <header class="main">
  	<center><h1>&copy;Poultry Management</h1></center>
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
        
       
		<h1>Welcome to Poonbook</h1>

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
		<a href="add.php" class="btn">Medication</a>
        </div>

       



    </form>
</div>


    <form>

		<p>
		<h1>Welcome to my Poonbook</h1>
		This poonbook also known as a telephone book, telephone address book phonebook is a listing of <br>
		phonebook subscribers in a geographical area or subscribers to services provided by the oraganization<br> 
		that publishes the directory. its purpose is to allow the phonebook email of a subscriber identifiesd by<br>
		name and address to be found.<br>
		<br>
		The advent of the internet and smartphones in the 21st century greatly reduced the need of a paper<br>
	    poonbook. Some communities, such as Seattle and San Francisco, sought to ban their unsolicited<br>
		distribution as wasted unwanted and harmful to the environment.<br><br>
		
		Subscriber names are generally listed in alphabetical order. together with their email. in principle<br>
		every subscriber in the geographical coverage area is listed, but subscribers may request the exclusion<br>
		of their number from the directory, often for a fee: thier email is then said to be unlisted, ex directory<br>
		private or private email, or non published.
		
		</p>


</div>
</section>

 <br><br>s
     <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>
	


</body>
</html>