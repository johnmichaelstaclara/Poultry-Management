<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$types_vac ="";
$timestamp="";
$amount="";




if(isset($_POST['save'])){
	$types_vac = $_POST['types_vac'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];


	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO vac (userid,types_vac,timestamp,amount) VALUES ('$userid','$types_vac','$timestamp','$amount')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:med1.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM vac WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:med1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM vac WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$types_vac = $row['types_vac'];
		$timestamp = $row['timestamp'];
		$amount = $row['amount'];
	
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$types_vac = $_POST['types_vac'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];

	
	
	$mysqli->query("UPDATE vac SET types_vac='$types_vac',timestamp='$timestamp',amount='$amount' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:med1.php');
}


?>