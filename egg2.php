<?php include('process7.php');?>


<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
<<<<<<< HEAD
	<title>poonbook</title>
=======
	<title>Poultry Management</title>
>>>>>>> adding new files
=======
	<title>Poultry Management</title>
>>>>>>> update file
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
	<form action="process7.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please pill up properly</p>
	 <div class="form-group">
	<label>Breed</label>
				<?php
						$sql = "SELECT * FROM `data`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="flocks_id" class="form-control">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option value="<?php echo $row['id'];?>"><?php echo $row['breed'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
        </div> 
		
		<div class="form-group">
			<label>Small Eggs</label>
			<input type="number" name="small_egg" class="form-control" value="<?php echo $small_egg;?>"placeholder="Enter the number of eggs" required>
		</div>
		
		
		<div class="form-group">
			<label>Medium Eggs</label>
			<input type="number" name="medium_egg" class="form-control" value="<?php echo $medium_egg;?>"placeholder="Enter the number of eggs" required>
		</div>
		
		
		<div class="form-group">
			<label>Large Eggs</label>
			<input type="number" name="large_egg" class="form-control" value="<?php echo $large_egg;?>"placeholder="Enter the number of eggs" required>
		</div>
		
		
		<div class="form-group">
			<label>Spoiled Eggs</label>
			<input type="number" name="spoiled_egg" class="form-control" value="<?php echo $spoiled_egg;?>"placeholder="Enter the number of eggs" required>
		</div>
		
		
		<div class="form-group">
			<label>Broken Eggs</label>
			<input type="number" name="broken_egg" class="form-control" value="<?php echo $broken_egg;?>"placeholder="Enter the number of eggs" required>
		</div>
		
		
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="egg1.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="egg1.php"class="btn">back</a>
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