<?php	
	include('db.php');

	$id = $_POST['id'];
	$title = $_POST['title'];
	$end_date = $_POST['end_date'];
	$table = 'checklist';

	$sql = "UPDATE $table SET title='$title', end_date='$end_date' WHERE id='$id'";
	$result = $conn->query($sql);

	header("Location: /web_development/index.php");

?>