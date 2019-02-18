<?php include('process1.php');?>


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
			<label>Timestamp</label>
			<input type="time" name="timestamp" class="form-control" value="<?php echo $timestamp;?>"placeholder="Enter the timestamp" required>
		</div>
		<div class="form-group">
			<label>Cust-ID</label>
			<input type="number" name="cust_id" class="form-control" value="<?php echo $cust_id;?>"placeholder="Enter the Cust_ID" required>
		</div>
		
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
    </footer>

</body>
</html>