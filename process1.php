<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$timestamp ="";
$cust_id="";




if(isset($_POST['save'])){
	$timestamp = $_POST['timestamp'];
	$cust_id = $_POST['cust_id'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO sale (userid,timestamp,cust_id) VALUES ('$userid','$timestamp','$cust_id')") or
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
		$timestamp = $row['timestamp'];
		$cust_id = $row['cust_id'];
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$timestamp = $_POST['timestamp'];
	$cust_id = $_POST['cust_id'];
	
	
	
	$mysqli->query("UPDATE sale SET timestamp='$timestamp',cust_id='$cust_id' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:sale1.php');
}


?>