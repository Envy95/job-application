<?php 
include_once("../connection/connection.php");
$conn = connection();

if(isset($_POST['delete'])){

	$id = $_POST['id'];

	$sql = "DELETE FROM user WHERE id = '$id'";
	$conn->query($sql) or die ($conn->error);

	header('Location: users.php?success=Record deleted');

}

 ?>