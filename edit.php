<?php include('process.php');?>


<!DOCTYPE html>
<html>
<head>
	<title>Poultry Management</title>
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

  <header class="main">
    <div class="row">
    <h1 class="col-sm-4">&copy;POULTRY MANAGEMENT</h1>
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
	<form action="process.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<p>Please pill up properly</p>
		<div class="form-group">
			<label>Breed</label>
			<input type="text" name="breed" class="form-control" value="<?php echo $breed;?>"placeholder="Enter the number of Breed" required>
		</div>
		<div class="form-group">
			<label>Rooster</label>
			<input type="number" name="rooster" class="form-control" value="<?php echo $rooster;?>"placeholder="Enter the number of rooster" required>
		</div>
		<div class="form-group">
			<label>Hen</label>
			<input type="number" name="hen" class="form-control" value="<?php echo $hen;?>"placeholder="Enter the number of hen" required>
		</div>
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="add.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="add.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>

</body>
</html>