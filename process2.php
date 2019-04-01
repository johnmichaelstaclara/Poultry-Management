<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
<<<<<<< HEAD
<<<<<<< HEAD
$flocks_id ="";
$eggs_id ="";
=======
$item_name ="";
>>>>>>> adding new files
=======
$item_name ="";
>>>>>>> update file
$unit="";
$quality ="";
$price="";




if(isset($_POST['save'])){
<<<<<<< HEAD
<<<<<<< HEAD
	$flocks_id = $_POST['flocks_id'];
	$eggs_id = $_POST['eggs_id'];
=======
	$item_name = $_POST['item_name'];
>>>>>>> adding new files
=======
	$item_name = $_POST['item_name'];
>>>>>>> update file
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$mysqli->query("INSERT INTO items (userid,description,unit,quality,price) VALUES ('$userid','$description','$unit','$quality','$price')") or
=======
	$mysqli->query("INSERT INTO items (userid,flocks_id,eggs_id,unit,quality,price) VALUES ('$userid','$flocks_id','$eggs_id','$unit','$quality','$price')") or
>>>>>>> New files
=======
	$mysqli->query("INSERT INTO items (userid,item_name,unit,quality,price) VALUES ('$userid','$item_name','$unit','$quality','$price')") or
>>>>>>> adding new files
=======
	$mysqli->query("INSERT INTO items (userid,item_name,unit,quality,price) VALUES ('$userid','$item_name','$unit','$quality','$price')") or
>>>>>>> update file
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:item1.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM items WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:item1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM items WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
<<<<<<< HEAD
<<<<<<< HEAD
		$flocks_id = $row['flocks_id'];
		$eggs_id = $row['eggs_id'];
=======
	
		$item_name = $row['item_name'];
>>>>>>> adding new files
=======
	
		$item_name = $row['item_name'];
>>>>>>> update file
		$unit = $row['unit'];
		$quality = $row['quality'];
		$price = $row['price'];
		
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
<<<<<<< HEAD
<<<<<<< HEAD
	$flocks_id = $_POST['flocks_id'];
	$eggs_id = $_POST['eggs_id'];
=======
	
	$item_name = $_POST['item_name'];
>>>>>>> adding new files
=======
	
	$item_name = $_POST['item_name'];
>>>>>>> update file
	$unit = $_POST['unit'];
	$quality = $_POST['quality'];
	$price = $_POST['price'];
	
	
	
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$mysqli->query("UPDATE items SET description='$description',unit='$unit',quality='$quality',price='$price' WHERE id=$id") or die($mysqli->error);
=======
	$mysqli->query("UPDATE items SET flocks_id='$flocks_id',eggs_id='$eggs_id',unit='$unit',quality='$quality',price='$price' WHERE id=$id") or die($mysqli->error);
>>>>>>> New files
=======
	$mysqli->query("UPDATE items SET item_name='$item_name',unit='$unit',quality='$quality',price='$price' WHERE id=$id") or die($mysqli->error);
>>>>>>> adding new files
=======
	$mysqli->query("UPDATE items SET item_name='$item_name',unit='$unit',quality='$quality',price='$price' WHERE id=$id") or die($mysqli->error);
>>>>>>> update file
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:item1.php');
}


?>