<?php

	$name 	 = $_POST['name'];
	$email 	 = $_POST['email'];
	$mob 	 = $_POST['mobile'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	
	$con = mysqli_connect('localhost','root','','tushar');

	if($con){
		echo "Well DOne";
	}

	$ins = "insert into enquiry values ('$name','$email','$mob','$subject','$message')";
	
	
	$run = mysqli_query($con,$ins);

	header('refresh:3; location:contact.html');
	mysqli_close($con);
	
?>