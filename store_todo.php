<?php
	
	include('db.php');

	
	$title = $_POST['title'];
	$end_date = $_POST['end_date'];
	$table = 'checklist';

	$sql = "INSERT INTO $table (title, end_date) VALUES ('$title', '$end_date')";
	$result = $conn->query($sql);

	header("Location: /web_development/index.php");
?>