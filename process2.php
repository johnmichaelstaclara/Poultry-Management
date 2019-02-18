<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$description ="";
$unit="";
$quality ="";
$price="";




if(isset($_POST['save'])){
	$description = $_POST['description'];
	$unit = $_POST['unit'];
	$quality = $_POST['quality'];
	$price = $_POST['price'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO sale (userid,description,unit,quality,price) VALUES ('$userid','$description','$unit','$quality','$price')") or
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
	
	header("location:item1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM sale WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$description = $row['description'];
		$unit = $row['unit'];
		$quality = $row['quality'];
		$price = $row['price'];
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$description = $_POST['description'];
	$unit = $_POST['unit'];
	$quality = $_POST['quality'];
	$price = $_POST['price'];
	
	
	
	$mysqli->query("UPDATE sale SET description='$description',unit='$unit',quality='$quality',price='$price' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:sale1.php');
}


?>