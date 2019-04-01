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
		 <a href="home.php" class="btn">Home</a>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		 <a href="add.php" class="btn">Flock Mangement</a>
		 <a href="add.php" class="btn">Sales</a>
		<a href="add.php" class="btn">Item</a>
		<a href="add.php" class="btn">Feeds</a>
		<a href="add.php" class="btn">Customer</a>
		<a href="add.php" class="btn">Medication</a>
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
		<a href="add.php" class="btn">Flock Mangement</a>
		<a href="sale1.php" class="btn">Sales</a>
		<a href="item1.php" class="btn">Item</a>
		<a href="feed1.php" class="btn">Feeds</a>
		<a href="cust1.php" class="btn">Customer</a>
		<a href="med1.php" class="btn">Medication</a>
		<a href="order1.php" class="btn">Order</a>
<<<<<<< HEAD
<<<<<<< HEAD
		<a href="report.php"class="btn">Reports</a>
>>>>>>> New files
=======
		<a href="egg1.php"class="btn">Eggs</a>
		<a href="report.php"class="btn">Reports</a>
>>>>>>> adding new files
=======
		<a href="egg1.php"class="btn">Eggs</a>
		<a href="report.php"class="btn">Reports</a>
>>>>>>> update file
		</nav>
		</div>
		 </header><br><br>
		 

<div id="main">
			
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	<?php require_once 'process4.php';?>
=======
	<?php require_once 'process5.php';?>
>>>>>>> New files
=======
	<?php require_once 'process5.php';?>
>>>>>>> adding new files
=======
	<?php require_once 'process5.php';?>
>>>>>>> update file
	
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		$result = $mysqli->query("SELECT * FROM cust where userid='$userid'") or die($mysqli->error);
=======
		$result = $mysqli->query("SELECT * FROM vac where userid='$userid'") or die($mysqli->error);
>>>>>>> New files
=======
=======
>>>>>>> update file
		$result = $mysqli->query("SELECT * FROM vac where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<?php
		
		$result = $mysqli->query("SELECT * FROM data,vac where data.id=vac.flocks_id") or die($mysqli->error);
<<<<<<< HEAD
>>>>>>> adding new files
=======
>>>>>>> update file
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
					<center><p><h1 style="color: white;">Contact List</h1></p></center>
					<tr>
=======
					<center><p><h1 style="color: white;">Vacination List</h1></p></center>
					<tr>
						<th>flocks</th>
>>>>>>> New files
=======
					<center><p><h1 style="color: white;">Vacination List</h1></p></center>
					<tr>
						<th>flocks</th>
>>>>>>> adding new files
=======
					<center><p><h1 style="color: white;">Vacination List</h1></p></center>
					<tr>
						<th>flocks</th>
>>>>>>> update file
						<th>Types of Vacination</th>
						<th>Timestamp</th>
						<th>Amount</th>
					
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['types_vac']?></td>
							<td><?php echo $row['timestamp']?></td>
=======
							<td><?php echo $row['flocks_id']?></td>
							<td><?php echo $row['types_vac']?></td>
							<td><?php echo $row['date']?></td>
>>>>>>> New files
=======
							<td><?php echo $row['breed']?></td>
							<td><?php echo $row['types_vac']?></td>
							<td><?php echo $row['date']?></td>
>>>>>>> adding new files
=======
							<td><?php echo $row['breed']?></td>
							<td><?php echo $row['types_vac']?></td>
							<td><?php echo $row['date']?></td>
>>>>>>> update file
							<td><?php echo $row['amount']?></td>
							<td>
								<a href="med2.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="process5.php?delete=<?php echo $row['id'];?>"
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	<a href="cust2.php"class="btn">Add Contact</a>
=======
	<a href="med2.php"class="btn">Add Contact</a>
>>>>>>> New files
=======
	<a href="med2.php"class="btn">Add Contact</a>
>>>>>>> adding new files
=======
	<a href="med2.php"class="btn">Add Contact</a>
>>>>>>> update file
	<a href="index.php"class="btn">Back</a>
	
</div>
<br><br>
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