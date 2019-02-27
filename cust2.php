<?php include('process4.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>poonbook</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  <header class="main">
    <div class="row">
    <h1 class="col-sm-4">&copy;POONBOOK</h1>
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
<footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
    </footer>

</body>
</html>