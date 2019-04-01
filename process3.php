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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$timestamp="";
$amount="";
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
$date="";
$amount="";
$flocks_id="";

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file




if(isset($_POST['save'])){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$types_feeds = $_POST['types_feeds'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	$timestamp = $_POST['timestamp'];
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
	$flocks_id = $_POST['flocks_id'];
	$types_feeds = $_POST['types_feeds'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
	$amount = $_POST['amount'];
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
	$mysqli->query("INSERT INTO feeds (userid,types_feeds,quality,unit,timestamp,amount) VALUES ('$userid','$types_feeds','$quality','$unit','$timestamp','$amount')") or
=======
	$mysqli->query("INSERT INTO feeds (userid,flocks_id,types_feeds,quality,unit,amount) VALUES ('$userid','$flocks_id','$types_feeds','$quality','$unit','$amount')") or
>>>>>>> New files
=======
	$mysqli->query("INSERT INTO feeds (userid,flocks_id,types_feeds,quality,unit,amount) VALUES ('$userid','$flocks_id','$types_feeds','$quality','$unit','$amount')") or
>>>>>>> adding new files
=======
	$mysqli->query("INSERT INTO feeds (userid,flocks_id,types_feeds,quality,unit,amount) VALUES ('$userid','$flocks_id','$types_feeds','$quality','$unit','$amount')") or
>>>>>>> update file
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		$types_feeds = $row['types_feeds'];
		$quality = $row['quality'];
		$unit = $row['unit'];
		$timestamp = $row['timestamp'];
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
		$flocks_id = $row['flocks_id'];
		$types_feeds = $row['types_feeds'];
		$quality = $row['quality'];
		$unit = $row['unit'];
		
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
		$amount = $row['amount'];
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$types_feeds = $_POST['types_feeds'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	$timestamp = $_POST['timestamp'];
=======
=======
>>>>>>> adding new files
=======
>>>>>>> update file
	$flocks_id = $_POST['flocks_id'];
	$types_feeds = $_POST['types_feeds'];
	$quality = $_POST['quality'];
	$unit = $_POST['unit'];
	
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> New files
=======
>>>>>>> adding new files
=======
>>>>>>> update file
	$amount = $_POST['amount'];

	
	
	
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$mysqli->query("UPDATE feeds SET types_feeds='$types_feeds',quality='$quality',unit='$unit',timestamp='$timestamp',amount='$amount' WHERE id=$id") or die($mysqli->error);
=======
	$mysqli->query("UPDATE feeds SET flocks_id='$flocks_id', types_feeds='$types_feeds',quality='$quality',unit='$unit',amount='$amount' WHERE id=$id") or die($mysqli->error);
>>>>>>> New files
=======
	$mysqli->query("UPDATE feeds SET flocks_id='$flocks_id', types_feeds='$types_feeds',quality='$quality',unit='$unit',amount='$amount' WHERE id=$id") or die($mysqli->error);
>>>>>>> adding new files
=======
	$mysqli->query("UPDATE feeds SET flocks_id='$flocks_id', types_feeds='$types_feeds',quality='$quality',unit='$unit',amount='$amount' WHERE id=$id") or die($mysqli->error);
>>>>>>> update file
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:feed1.php');
}


?>