<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$types_vac ="";
<<<<<<< HEAD
$timestamp="";
$amount="";

=======
$date="";
$amount="";
$breed="";
$flocks_id="";
>>>>>>> New files



if(isset($_POST['save'])){
<<<<<<< HEAD
	$types_vac = $_POST['types_vac'];
	$timestamp = $_POST['timestamp'];
=======
	$flocks_id = $_POST['flocks_id'];
	$types_vac = $_POST['types_vac'];
>>>>>>> New files
	$amount = $_POST['amount'];


	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

<<<<<<< HEAD
	$mysqli->query("INSERT INTO vac (userid,types_vac,timestamp,amount) VALUES ('$userid','$types_vac','$timestamp','$amount')") or
=======
	$mysqli->query("INSERT INTO vac (userid,flocks_id,types_vac,amount) VALUES ('$userid','$flocks_id','$types_vac','$amount')") or
>>>>>>> New files
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
<<<<<<< HEAD
		$types_vac = $row['types_vac'];
		$timestamp = $row['timestamp'];
=======
		$flocks_id = $row['flocks_id'];
		$types_vac = $row['types_vac'];
	
>>>>>>> New files
		$amount = $row['amount'];
	
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
<<<<<<< HEAD
=======
	$flocks_id = $_POST['flocks_id'];
>>>>>>> New files
	$types_vac = $_POST['types_vac'];
	$timestamp = $_POST['timestamp'];
	$amount = $_POST['amount'];

	
	
<<<<<<< HEAD
	$mysqli->query("UPDATE vac SET types_vac='$types_vac',timestamp='$timestamp',amount='$amount' WHERE id=$id") or die($mysqli->error);
=======
	$mysqli->query("UPDATE vac SET flocks_id='$flocks_id',types_vac='$types_vac',amount='$amount' WHERE id=$id") or die($mysqli->error);
>>>>>>> New files
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:med1.php');
}


?>