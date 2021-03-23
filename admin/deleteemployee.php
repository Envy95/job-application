<?php 
include_once("../connection/connection.php");
$conn = connection();

if(isset($_POST['delete'])){

	$id = $_POST['id'];

	$sql = "DELETE FROM employees WHERE emp_id = '$id'";
	$conn->query($sql) or die ($conn->error);

	header('Location: employeelist.php');

}

 ?>