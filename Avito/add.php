<?php
	include('conn.php');
 
	$Prname=$_POST['Prname'];
	$description=$_POST['description'];
	$Category=$_POST['Category'];
	$Prix=$_POST['Prix'];
 
	mysqli_query($conn,"insert into user (Prname,description,Prix,Category) values ('$Prname','$description','$Prix','$Category')");
	header('location:index.php');
 
?>