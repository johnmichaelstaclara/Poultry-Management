<?php

session_start();
$host = '';
$db ='';

$mysqli = new mysqli('localhost','root','','registration') or die(mysqli_error($mysqli));

$id='';
$update = false;
$last_name ="";
$first_name="";
$middle_name="";
$contact_no="";
$address="";



if(isset($_POST['save'])){
	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
    $contact_no = $_POST['contact_no'];
	$address = $_POST['address'];

	$username= $_SESSION["username"];
	$result=$mysqli->query("select id from users where username='$username'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$userid=$row['id'];

	}

	$mysqli->query("INSERT INTO cust (userid,last_name,first_name,middle_name,contact_no,address) VALUES ('$userid','$last_name','$first_name','$middle_name','$contact_no','$address')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:cust1.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM cust WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:cust1.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM cust WHERE id=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$last_name = $row['last_name'];
		$first_name = $row['first_name'];
		$middle_name = $row['middle_name'];
		$contact_no = $row['contact_no'];
		$address = $row['address'];
		
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$contact_no = $_POST['contact_no'];
	$address = $_POST['address'];
	
	
	$mysqli->query("UPDATE cust SET last_name='$last_name',first_name='$first_name',middle_name='$middle_name',contact_no='$contact_no',address='$address' WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:cust1.php');
}


?>