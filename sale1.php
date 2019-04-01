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
		 <a href="home.php" class="btn">Home</a>
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
			
	<?php require_once 'process1.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM sale where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		
		
		
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Sales List</h1></p></center>
					<tr>
						<th>Sales_ID</th>
						<th>Timestamp</th>
						<th>Cust_ID</th>
						<th>Eggs_ID</th>
						<th>Flocks_ID</th>
						
						
						
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['cust_id']?></td>
<<<<<<< HEAD
<<<<<<< HEAD
							<td><?php echo $row['eggs_id']?></td>
							<td><?php echo $row['flocks_id']?></td>
							
=======
														
>>>>>>> adding new files
=======
														
>>>>>>> update file
							<td>
								<a href="sale2.php?edit=<?php echo $row['id'];?>"
									class="btn">Edit</a>
								<a href="process1.php?delete=<?php echo $row['id'];?>"
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

	<a href="sale2.php"class="btn">Add</a>
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