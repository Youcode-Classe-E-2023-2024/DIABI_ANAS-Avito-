<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">

<title>Basic MySQLi Commands</title>
</head>
<body>
	<div class="centered">
		<form method="POST" class="forma" action="add.php">
			<input type="text" placeholder="Product Name" required name="Prname">
			<input type="text" required placeholder="Description" name="description">
			<input type="number" required name="Prix" placeholder="Prix">
			<input type="text" required name="Category" placeholder="Ctegory">
			<input type="submit" class="addbtn" name="add" >
		</form>
	</div>
	<br>
	<h1 class="heding">Your Products:</h1>
	<div class="tabla">
		<table class="tbila" border="1">
			
			<thead>
				<th>Product Name</th>
				<th>description</th>
				<th>Category</th>
				<th>Prix</th>
				<th>control</th>
			</thead>

			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['Prname']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['Category']; ?></td>
							<td><?php echo $row['Prix']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>