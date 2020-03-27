<?php
	
	include('db.php');
		
	$table = "checklist";
	$sql = "SELECT * FROM $table";
	$result = $conn->query($sql);

?>
<html>
<style>
table {
border: 5px;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<head>
</head>
<body>
</body>
	<h1 align="center">To Dos</h1>
	<h4 align="center"><a href="add_todo.php">Add To Do</a></h4>
	<table align="center">
		<tr>
			<th>#</th>
			<th>Title</th>
			<th>Due Date</th>
			<th>Action</th>
		</tr>
		
			<?php
				if($result->num_rows > 0){
					$rowNum = 1;
					while($row = $result->fetch_assoc()){
			?>
				<tr>
					<td><?php echo $rowNum; ?></td>
					
					<td><?php echo $row["title"]; ?></td>
					<td><?php echo $row["end_date"]; ?></td>
					<td>
						<a href="edit_todo.php?id=<?php echo $row['id'] ?>">Edit</a>
						<form action="delete_todo.php" onsubmit="return confirm('Are you sure?')"" method="post">
							<input type="hidden" name="todo_id" value="<?php echo $row['id'] ?>" />
							<button type="submit">Delete</button>
						</form>
					</td>
				</tr>		
			<?php
					$rowNum++;
					}
				}					
			?>
			

	</table>
</html>