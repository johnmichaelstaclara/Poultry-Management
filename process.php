<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$breed ="";
$rooster="";
$hen="";



if(isset($_POST['save'])){
	$breed = $_POST['breed'];
	$rooster = $_POST['rooster'];
	$hen = $_POST['hen'];
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO data (userid,breed,rooster,hen) VALUES ('$userid','$breed','$rooster','$hen')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:add.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:add.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$breed = $row['breed'];
		$rooster = $row['rooster'];
		$hen = $row['hen'];
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$breed = $_POST['breed'];
	$rooster = $_POST['rooster'];
	$hen = $_POST['hen'];
	
	
	$mysqli->query("UPDATE data SET breed='$breed',rooster='$rooster',hen='$hen' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:add.php');
}


?>