<?php include('process5.php');?>

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
		 <a href="home.php" class="btn">Home</a>
		 <a href="add.php" class="btn">Flock Mangement</a>
		 <a href="add.php" class="btn">Sales</a>
		<a href="add.php" class="btn">Item</a>
		<a href="add.php" class="btn">Feeds</a>
		<a href="add.php" class="btn">Customer</a>
		<a href="add.php" class="btn">Medication</a>
		</nav>
		</div>
		 </header><br><br>
		 

<div id="main">
			
	<?php require_once 'process4.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM cust where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Contact List</h1></p></center>
					<tr>
						<th>Types of Vacination</th>
						<th>Timestamp</th>
						<th>Amount</th>
					
						<th colspan="2">Action</th>
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['types_vac']?></td>
							<td><?php echo $row['timestamp']?></td>
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

	<a href="cust2.php"class="btn">Add Contact</a>
	<a href="index.php"class="btn">Back</a>
	
</div>
<br><br>
<footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
    </footer>

</body>
</html>