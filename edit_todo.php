<?php 
	include('db.php');


	$id = $_GET['id'];
	$table = "checklist";

	$sql = "SELECT * FROM $table WHERE id=$id";
	$result = $conn->query($sql);

?>

<html>
<body>

	<?php
		if($result->num_rows > 0){
			$rowNum = 1;
			while($row = $result->fetch_assoc()){
	?>

	<form action="update_todo.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
		<input type="text" name="title" value="<?php echo $row['title'] ?>" /><br />
		<input type="text" name="end_date" value="<?php echo $row['end_date'] ?>" /><br />
		<input type="submit" value="Update" /><br />
	</form>

	<?php
		}
	}
	?>
</body>
</html>