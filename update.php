<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$Prname=$_POST['Prname'];
	$description=$_POST['description'];
	$Category=$_POST['Category'];
	$Prix=$_POST['Prix'];
 
	mysqli_query($conn,"update `user` set Prname='$Prname', description='$description', Category='$Category', Prix='$Prix' where userid='$id'");
	header('location:index.php');
?>