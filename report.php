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
		<a href="index.php"class="btn">Back</a>
		</nav>
		</div>
		 </header><br><br>
		 

<div id="main">
			
	<?php require_once 'process5.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM vac where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Vacination Reports</h1></p></center>
					<tr>
						<th>Breed</th>
						<th>Types of Vacination</th>
						<th>Timestamp</th>
						<th>Amount</th>
					
					
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['flocks_id']?></td>
							<td><?php echo $row['types_vac']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['amount']?></td>
							
							
						</tr>
						<?php endwhile;?>
			</table>
			</div>
		</div>
		
<br><br>

     

			
	<?php require_once 'process5.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM feeds where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Feeds Reports</h1></p></center>
					<tr>
						<th>Breed</th>
						<th>Types of Feeds</th>
						<th>Quality</th>
						<th>Unit</th>
						<th>Timestamp</th>
						<th>Amount</th>
						
					
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['flocks_id']?></td>
							<td><?php echo $row['types_feeds']?></td>
							<td><?php echo $row['quality']?></td>
							<td><?php echo $row['unit']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['amount']?></td>
							
							
						</tr>
						<?php endwhile;?>
			</table>
	</div>
     </div>
<br><br>

     <?php require_once 'process5.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM data where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Flocks Reports</h1></p></center>
					<tr>
						<th>Flocks_ID</th>
						<th>Breed</th>
						<th>Rooster</th>
						<th>Hen</th>
					
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['breed']?></td>
							<td><?php echo $row['rooster']?></td>
							<td><?php echo $row['hen']?></td>
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>
     </div>
     <br><br>


     <?php require_once 'process5.php';?>
	
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
					<center><p><h1 style="color: white;">Sales Reports</h1></p></center>
					<tr>
						<th>Sales_ID</th>
						<th>Timestamp</th>
						<th>Cust_ID</th>
					    <th>Eggs_ID</th>
						<th>Flocks_ID</th>
					
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['cust_id']?></td>
							<td><?php echo $row['eggs_id']?></td>
							<td><?php echo $row['flocks_id']?></td>
							
						
						</tr>
						<?php endwhile;?>
			</table>
		</div>
	</div>
	<br><br>

	<?php require_once 'process5.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM items where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Item Reports</h1></p></center>
					<tr>
						<th>Item_ID</th>
						<th>Flocks_Id</th>
						<th>Eggs_Id</th>
						<th>Unit</th>
						<th>Quality</th>
						<th>Price</th>
					
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['flocks_id']?></td>
							<td><?php echo $row['eggs_id']?></td>
							<td><?php echo $row['unit']?></td>
							<td><?php echo $row['quality']?></td>
							<td><?php echo $row['price']?></td>
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>
	</div>
	<br><br>

	<?php require_once 'process5.php';?>
	
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
					<center><p><h1 style="color: white;">Customer Reports</h1></p></center>
					<tr>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Contact No.</th>
						<th>Addres</th>
					
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['last_name']?></td>
							<td><?php echo $row['first_name']?></td>
							<td><?php echo $row['middle_name']?></td>
							<td><?php echo $row['contact_no']?></td>
							<td><?php echo $row['address']?></td>
						</tr>
						<?php endwhile;?>
			</table>
		</div>
	</div>
	<br><br>

	<?php require_once 'process5.php';?>
	
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
		$result = $mysqli->query("SELECT * FROM data1 where userid='$userid'") or die($mysqli->error);
		//pre_r($result);
		
		}
		?>
		<div class="row justify-content-center">
		<br><br><br>
			<table class="table">
			
				<thead>
					<center><p><h1 style="color: white;">Order Reports</h1></p></center>
					<tr>
					    <th>Order No.</th>
						<th>Timestamp</th>
						<th>Sales_Id</th>
						<th>Item_ID</th>
						<th>Price</th>
						
					</tr>
				</thead>
				
				<?php
					while($row=$result->fetch_assoc()):?>
					
						<tr>
							<td><?php echo $row['id']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['sales_id']?></td>
							<td><?php echo $row['item_id']?></td>
							<td><?php echo $row['price']?></td>
							
						</tr>
						<?php endwhile;?>
			</table>
		</div>

</div>

<br><br>
 <footer class="main">
   <p class="col-sm-4">&copy; 2018 JohnMichael L. Sta.Clara</p>
   <p class="tile-copyright">University of Science and Technology of Southern Philippines<br>
   P-6 Mobod Oroquieta City, Misamis Occidental 7207</p>
    </footer>

</body>
</html>