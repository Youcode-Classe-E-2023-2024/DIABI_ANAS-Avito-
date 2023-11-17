<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Product name:</label><input type="text" value="<?php echo $row['Prname']; ?>" name="Prname">
		<label>description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
		<label>Category:</label><input type="text" value="<?php echo $row['Category']; ?>" name="Category">
		<label>Prix:</label><input type="text" value="<?php echo $row['Prix']; ?>" name="Prix">

		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>