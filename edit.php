<?php

	$conn = mysqli_connect ("localhost", "root", "", "maklumat");

	$name = mysqli_real_escape_string($conn, $_POST['fname']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$ic = mysqli_real_escape_string($conn, $_POST['ic']);
	$address = mysqli_real_escape_string($conn, $_POST['number']);
	$edit = mysqli_real_escape_string($conn, $_POST['address']);
	
	$query = "UPDATE data SET nama= '$name', umur='$age',tarikhlahir='$date','$number','$address', '$'"











?>