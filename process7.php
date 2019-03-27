<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$date ="";
$small_egg="";
$medium_egg="";
$large_egg="";
$spoiled_egg="";
$broken_egg="";
$flocks_id="";




if(isset($_POST['save'])){
	$flocks_id = $_POST['flocks_id'];
	$small_egg = $_POST['small_egg'];
	$medium_egg = $_POST['medium_egg'];
	$large_egg = $_POST['large_egg'];
	$spoiled_egg = $_POST['spoiled_egg'];
	$broken_egg = $_POST['broken_egg'];


	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO egg (userid,flocks_id,small_egg,medium_egg,large_egg,spoiled_egg,broken_egg) VALUES ('$userid','$flocks_id','$small_egg','$medium_egg','$large_egg','$spoiled_egg','$broken_egg')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:egg1.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM egg WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:egg1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM egg WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$flocks_id = $row['flocks_id'];
		$small_egg = $row['small_egg'];
		$medium_egg = $row['medium_egg'];
		$large_egg = $row['large_egg'];
		$spoiled_egg = $row['spoiled_egg'];
		$broken_egg = $row['broken_egg'];
	
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$flocks_id = $_POST['flocks_id'];
	$date = $_POST['date'];
	$small_egg = $_POST['small_egg'];
	$medium_egg = $_POST['medium_egg'];
	$large_egg = $_POST['large_egg'];
	$spoiled_egg = $_POST['spoiled_egg'];
	$broken_egg = $_POST['broken_egg'];

	
	
	$mysqli->query("UPDATE egg SET flocks_id='$flocks_id',small_egg='$small_egg',medium_egg='$medium_egg',large_egg='$large_egg',spoiled_egg='$spoiled_egg',broken_egg='$broken_egg' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:egg1.php');
}


?>