<?php 
	include('db.php');


	$id = $_POST['todo_id'];
	$table = "checklist";

	$sql = "DELETE  FROM $table WHERE id=$id";
	$result = $conn->query($sql);


	header("Location: /web_development/index.php");

?>