<?php include('process6.php');?>


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
	<form action="process6.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
<<<<<<< HEAD
	<p>Please pill up properly</p>
	
	 <label>Customer</label>
	 
				<?php
						$sql = "SELECT * FROM `sale`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="sales_id" class="form-control">
=======
	<table class="table">
	<p>Please pill up properly</p>
			  
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM items where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				 <div class="form-group">
	            <label>Item Name</label>
				<?php
						$sql = "SELECT * FROM `items`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="item_name" class="form-control">
>>>>>>> update file
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
<<<<<<< HEAD
                           <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>   
=======
                           <option value="<?php echo $row['id'];?>"><?php echo $row['item_name'];?></option>   
>>>>>>> update file
                           <?php   
                          }
                          ?>
            </select>
<<<<<<< HEAD
			<br>
			<label>Items</label>
=======
        </div> 
        <div class="form-group">
	            <label>Unit</label>
>>>>>>> update file
				<?php
						$sql = "SELECT * FROM `items`";
						$result = mysqli_query($mysqli, $sql);

				?>
<<<<<<< HEAD
				<select name="item_id" class="form-control">
=======
				<select name="unit" class="form-control">
>>>>>>> update file
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
<<<<<<< HEAD
                           <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>   
=======
                           <option value="<?php echo $row['id'];?>"><?php echo $row['unit'];?></option>   
>>>>>>> update file
                           <?php   
                          }
                          ?>
            </select>
<<<<<<< HEAD
			<br>
			  
			  <div class="form-group">
			<label>Price</label>
			<input type="number" name="price" class="form-control" value="<?php echo $price;?>"placeholder="Enter the Price" required>
		</div>
			  
			 
			  
			  
=======
        </div> 
        <div class="form-group">
	            <label>Unit</label>
				<?php
						$sql = "SELECT * FROM `items`";
						$result = mysqli_query($mysqli, $sql);

				?>
				<select name="unit" class="form-control">
                      <?php
                          
						  
                          $resultCheck = mysqli_num_rows($records);

                            while ($row = mysqli_fetch_array($result)) {
                      ?>
                           <option value="<?php echo $row['id'];?>"><?php echo $row['price'];?></option>   
                           <?php   
                          }
                          ?>
            </select>
        </div> 
			</table>

>>>>>>> update file
			  
			<br>
	
		<div class="form-group">
		<?php 
			if($update==true):
		?>
<<<<<<< HEAD
		<button type="submit" class="btn" name="update">Update</button>
		<a href="order1.php"class="btn">back</a>
=======

>>>>>>> update file
		<?php else: ?>
			<button type="submit" class="btn" name="save">save</button>
			<a href="order1.php"class="btn">back</a>
		<?php endif;?>
		</div>
	</form>
	</div>
<<<<<<< HEAD
=======
</div>
</table>
</form>
</div>


>>>>>>> update file

<br>
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>

</body>
</html>