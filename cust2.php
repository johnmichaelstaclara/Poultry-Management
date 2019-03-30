<?php include('process4.php');?>


<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<title>poonbook</title>
=======
	<title>Poultry Management</title>
>>>>>>> adding new files
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  <header class="main">
    <div class="row">
<<<<<<< HEAD
<<<<<<< HEAD
    <h1 class="col-sm-4">&copy;POONBOOK</h1>
=======
    <h1 class="col-sm-4">&copy;POULTRY MANAGEMENT</h1>
>>>>>>> New files
=======
    <h1 class="col-sm-4">&copy;POULTRY MANAGEMENT</h1>
>>>>>>> adding new files
     <nav class="col-sm-8 text-right"> 	 
         
	     <?php if (isset($_SESSION['success'])): ?>
		      
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      <p><a href="index.php?logout='1'" style="color:white;">Logout</a></p>
		 <?php endif ?> 
		</nav>
		</div>
		 </header><br>

<div id="main">
			
<br>
	<div class="row justify-content-center">
	<form action="process4.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please pill up properly</p>
		<div class="form-group">
			<label>Last Name</label>
			<input type="text" name="last_name" class="form-control" value="<?php echo $last_name;?>"placeholder="Enter your last name" required>
		</div>
		<div class="form-group">
			<label>First Name</label>
			<input type="text" name="first_name" class="form-control" value="<?php echo $first_name;?>"placeholder="Enter your first name" required>
		</div>
		<div class="form-group">
			<label>Middle Name</label>
			<input type="text" name="middle_name" class="form-control" value="<?php echo $middle_name;?>"placeholder="Enter your middle name" required>
		</div>
		<div class="form-group">
			<label>Contact No.</label>
			<input type="text" name="contact_no" class="form-control" value="<?php echo $contact_no;?>"placeholder="Enter your Contact no." required>
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" value="<?php echo $address;?>"placeholder="Enter your Address" required>
		</div>
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="cust1.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="cust1.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>
<<<<<<< HEAD
<<<<<<< HEAD
<footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
=======
=======
>>>>>>> adding new files
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
    </footer>

</body>
</html>