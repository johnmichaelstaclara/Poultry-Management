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
		 <a href="home.php" class="btn">Home</a>
		<a href="add.php" class="btn">Flock Mangement</a>
		<a href="sale1.php" class="btn">Sales</a>
		<a href="item1.php" class="btn">Item</a>
		<a href="feed1.php" class="btn">Feeds</a>
		<a href="cust1.php" class="btn">Customer</a>
		<a href="med1.php" class="btn">Medication</a>
		<a href="order1.php" class="btn">Order</a>
		<a href="report.php"class="btn">Reports</a>
		</nav>
		</div>
		 </header><br><br>
		 

<div id="main">
			
	<?php require_once 'process7.php';?>
	
	<?php
	
	if(isset($_SESSION['message'])):?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	
	<?php 
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	?>
	</div>
	<?php endif ?>
	<div class="container">
	<?php
		$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));
		$username= $_SESSION["username"];
		$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
		if(@count($result)==1)
		{
			$row=$result->fetch_array();
			$userid=$row['id'];

		}
		$result = $mysqli->query("SELECT * FROM egg where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> update file
		<?php
		
		$result = $mysqli->query("SELECT * FROM data,egg where data.id=egg.flocks_id") or die($mysqli->error);
		//pre_r($result);
		
		?>
<<<<<<< HEAD
>>>>>>> adding new files
=======
>>>>>>> update file
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Eggs List</h1></p></center>
					<tr>
						<th>Egg Id</th>
<<<<<<< HEAD
<<<<<<< HEAD
						<th>Flocks Id</th>
=======
						<th>Breed</th>
>>>>>>> adding new files
=======
						<th>Breed</th>
>>>>>>> update file
						<th>Timestamp</th>
						<th>Small Eggs</th>
						<th>Medium Eggs</th>
						<th>Large Eggs</th>
						<th>Spoiled Eggs</th>
						<th>Broken Eggs</th>
					
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
<<<<<<< HEAD
<<<<<<< HEAD
							<td><?php echo $row['flocks_id']?></td>
=======
							<td><?php echo $row['breed']?></td>
>>>>>>> adding new files
=======
							<td><?php echo $row['breed']?></td>
>>>>>>> update file
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['small_egg']?></td>
							<td><?php echo $row['medium_egg']?></td>
							<td><?php echo $row['large_egg']?></td>
							<td><?php echo $row['spoiled_egg']?></td>
							<td><?php echo $row['broken_egg']?></td>
							<td>
								<a href="egg2.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="process7.php?delete=<?php echo $row['id'];?>"
									class="btn btn-danger">Delete</a>
									
							</td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
		<?php
		function pre_r($array){
			echo'<pre>';
			print_r($array);
			echo'</pre>';
		}
	
	?>

	<a href="egg2.php"class="btn">Add Contact</a>
	<a href="index.php"class="btn">Back</a>
	
</div>
<br><br>
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>

</body>
</html>