<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$date ="";
$cust_id="";
$eggs_id="";
$flocks_id="";








if(isset($_POST['save'])){
	$cust_id = $_POST['cust_id'];
<<<<<<< HEAD
<<<<<<< HEAD
	$eggs_id = $_POST['eggs_id'];
	$flocks_id = $_POST['flocks_id'];
=======
	
	
>>>>>>> adding new files
=======
	
	
>>>>>>> update file
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

<<<<<<< HEAD
<<<<<<< HEAD
	$mysqli->query("INSERT INTO sale (userid,cust_id,eggs_id,flocks_id) VALUES ('$userid','$cust_id','$eggs_id','$flocks_id')") or
=======
	$mysqli->query("INSERT INTO sale (userid,cust_id) VALUES ('$userid','$cust_id')") or
>>>>>>> adding new files
=======
	$mysqli->query("INSERT INTO sale (userid,cust_id) VALUES ('$userid','$cust_id')") or
>>>>>>> update file
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:sale1.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM sale WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:sale1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM sale WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$cust_id = $row['cust_id'];
		$eggs_id = $row['eggs_id'];
		$flocks_id = $row['flocks_id'];
		
	
		
	
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];

	$cust_id = $_POST['cust_id'];
	$eggs_id = $_POST['eggs_id'];
	$flocks_id = $_POST['flocks_id'];
	

	

	
	
	
<<<<<<< HEAD
<<<<<<< HEAD
	$mysqli->query("UPDATE sale SET cust_id='$cust_id',eggs_id='$eggs_id',flocks_id='$flocks_id' WHERE id=$id") or die($mysqli->error);
=======
	$mysqli->query("UPDATE sale SET cust_id='$cust_id' WHERE id=$id") or die($mysqli->error);
>>>>>>> adding new files
=======
	$mysqli->query("UPDATE sale SET cust_id='$cust_id' WHERE id=$id") or die($mysqli->error);
>>>>>>> update file
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:sale1.php');
}


?>