<?php include('process1.php');?>


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
	<form action="process1.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Please pill up properly</p>

        <div class="form-group">
	<label>Cust_id</label>
				<?php
						$sql = "SELECT * FROM `cust`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="cust_id" class="form-control">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option value="<?php echo $row['id'];?>"><?php echo $row['last_name'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
        </div> 
      

<<<<<<< HEAD
       <div class="form-group">
	  <label>Eggs_id</label>
				<?php
						$sql = "SELECT * FROM `egg`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="eggs_id" class="form-control">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
        </div> 
 
	  <div class="form-group">
	  <label>Flocks_id</label>
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
=======
      
>>>>>>> adding new files
 
	
	
		
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn" name="update">Update</button>
		<a href="sale1.php"class="btn">back</a>
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="sale1.php"class="btn">back</a>
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