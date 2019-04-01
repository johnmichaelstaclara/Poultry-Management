<?php include('process5.php');?>


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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <h1 class="col-sm-4">&copy;POONBOOK</h1>
=======
    <h1 class="col-sm-4">&copy;POULTRY MANAGEMENT</h1>
>>>>>>> New files
=======
    <h1 class="col-sm-4">&copy;POULTRY MANAGEMENT</h1>
>>>>>>> adding new files
=======
    <h1 class="col-sm-4">&copy;POULTRY MANAGEMENT</h1>
>>>>>>> update file
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
	<form action="process5.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please pill up properly</p>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		<div class="form-group">
			<label>Types of Vacination</label>
			<input type="text" name="types_vac" class="form-control" value="<?php echo $types_vac;?>"placeholder="Enter the types of Vacination" required>
		</div>
		<div class="form-group">
			<label>Timestamp</label>
			<input type="text" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the Timestamp" required>
		</div>
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
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

		<div class="form-group">
			<label>Types of Medication</label>
            <select name="types_vac" class="form-control" required="">
            	<option value="">Choose.......</option>
            	<option value="Bitracin">Bitracin</option>
            	<option value="Chlortetracycline">Chlortetracycline</option>
            	<option value="Lincomycin">Lincomycin</option>
            	<option value="Oxytetracycline">Oxytetracycline</option>
            	<option value="Penicillin">Penicillin</option>
            	<option value="Tylosin">Tylosin</option>
            	<option value="Virginiamycin">Virginiamycin</option><br>
            	<option value="Amprolium">Amprolium</option><br>
            	<option value="Bambermycin">Bambermycin</option>
            	<option value="Decoquinate">Decoquinate</option>
            	<option value="Diclazuril">Diclazuril</option>
            	<option value="Lasalocid">Lasalocid</option>
            	<option value="Narasin">Narasin</option>
            	
            </select>
		</div>
		
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
		<div class="form-group">
			<label>Amount</label>
			<input type="text" name="amount" class="form-control" value="<?php echo $amount;?>"placeholder="Enter the amount" required>
		</div>
		
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="med1.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="med1.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
    </footer>

</body>
</html>