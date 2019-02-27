<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$types_feeds ="";
$quality="";
$unit="";
$timestamp="";
$amount="";




if(isset($_POST['save'])){
	$types_feeds = $_POST['types_feeds'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO feeds (userid,types_feeds,quality,unit,timestamp,amount) VALUES ('$userid','$types_feeds','$quality','$unit','$timestamp','$amount')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:feed1.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM feeds WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:feed1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM feeds WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$types_feeds = $row['types_feeds'];
		$quality = $row['quality'];
		$unit = $row['unit'];
		$timestamp = $row['timestamp'];
		$amount = $row['amount'];
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$types_feeds = $_POST['types_feeds'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];

	
	
	
	$mysqli->query("UPDATE feeds SET types_feeds='$types_feeds',quality='$quality',unit='$unit',timestamp='$timestamp',amount='$amount' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:feed1.php');
}


?>