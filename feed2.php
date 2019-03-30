<?php include('process3.php');?>


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
	<form action="process3.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please pill up properly</p>
<<<<<<< HEAD
<<<<<<< HEAD
		<div class="form-group">
			<label>Types of Feeds</label>
			<input type="text" name="types_feeds" class="form-control" value="<?php echo $types_feeds;?>"placeholder="Enter the Types of feeds" required>
=======
=======
>>>>>>> adding new files
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
			<label>Types of Feeds</label>
            <select name="types_feeds" class="form-control" required="">
            	<option value="">Choose.......</option>
            	<option value="Chick Starter">Chick Starter</option>
            	<option value="Grower Feed">Grower Feed</option>
            	<option value="Layer Feed">Layer Feed</option>
            	<option value="Flock Raising">Flock Raising</option>
            	<option value="Brioler Feed">Brioler Feed</option>
            	<option value="Game Bird Feed">Game Bird Feed</option>
            	<option value="Fermented Feed">Fermented Feed</option><br>
            	<option value="Craked Corn">Craked Corn</option><br>
            	<option value="Mash">Mash</option>
            	<option value="Crumble">Crumble</option>
            	<option value="Pellets">Pellets</option>
            	<option value="Shell Grit">Shell Grit</option>
            	<option value="Chicken Scratch">Chicken Scratch</option>
            	
            </select>
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
		</div>
		<div class="form-group">
			<label>Quality</label>
			<input type="number" name="quality" class="form-control" value="<?php echo $quality;?>"placeholder="Enter the quality" required>
		</div>
		<div class="form-group">
			<label>Unit</label>
			<input type="number" name="unit" class="form-control" value="<?php echo $unit;?>"placeholder="Enter the unit" required>
		</div>
<<<<<<< HEAD
<<<<<<< HEAD
		<div class="form-group">
			<label>Timestamp</label>
			<input type="text" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the timestamp" required>
		</div>
		<div class="form-group">
			<label>Amount</label>
			<input type="text" name="amount" class="form-control" value="<?php echo $amount;?>"placeholder="Enter the amount" required>
=======
=======
>>>>>>> adding new files
		
		<div class="form-group">
			<label>Amount</label>
			<input type="number" name="amount" class="form-control" value="<?php echo $amount;?>"placeholder="Enter the amount" required>
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
		</div>
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="feed1.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="feed1.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>
<<<<<<< HEAD
<<<<<<< HEAD
<footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
    </footer>

=======
=======
>>>>>>> adding new files
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>


<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
</body>
</html>