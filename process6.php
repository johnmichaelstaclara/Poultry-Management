<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$date ="";
$sales_id="";
<<<<<<< HEAD
$item_id ="";
=======
$item_name ="";
$unit="";
$quality="";
>>>>>>> update file
$price="";




if(isset($_POST['save'])){
	
	$sales_id = $_POST['sales_id'];
<<<<<<< HEAD
	$item_id = $_POST['item_id'];
	$price = $_POST['price'];
=======
	$item_id = $_POST['item_name'];
	$unit = $_POST['unit'];
	$quality = $_POST['quality'];
	$price = $_POST['price'];


>>>>>>> update file
	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

<<<<<<< HEAD
	$mysqli->query("INSERT INTO `data1` (`userid`,`sales_id`, `item_id`, `price`) VALUES ('$userid', '$sales_id', '$item_id', '$price')") or
=======
	$mysqli->query("INSERT INTO `data1` (`userid`,`sales_id`, `item_name`,'unit','quality', `price`) VALUES ('$userid', '$sales_id', '$item_name','$unit','$quality', '$price')") or
>>>>>>> update file
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
<<<<<<< HEAD
	header("location:order1.php");
=======
	eader("location:ordher1.php");
>>>>>>> update file
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM data1 WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:order1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM data1 WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		
		$sales_id = $row['sales_id'];
		$item_id = $row['item_id'];
<<<<<<< HEAD
=======
		$unit = $row['unit'];
		$quality = $row['quality'];
>>>>>>> update file
		$price = $row['price'];
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$sales_id = $_POST['sales_id'];
<<<<<<< HEAD
	$item_id = $_POST['item_id'];
=======
	$item_id = $_POST['item_name'];
	$unit = $_POST['unit'];
	$quality = $_POST['quality'];
>>>>>>> update file
	$price = $_POST['price'];
	
	
	
<<<<<<< HEAD
	$mysqli->query("UPDATE data1 SET sales_id='$sales_id',item_id='$item_id',price='$price' WHERE id=$id") or die($mysqli->error);
=======
	$mysqli->query("UPDATE data1 SET sales_id='$sales_id',item_name='$item_name',unit='$unit',quality='$quality',price='$price' WHERE id=$id") or die($mysqli->error);
>>>>>>> update file
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:order1.php');
}


?>