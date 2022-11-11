<?php

	$conn = mysqli_connect ("localhost", "root", "", "maklumat");
	
	$buang = mysqli_real_escape_string($conn,$_GET['remove']);
	$query = "DELETE FROM data WHERE id ='$buang'";
	$result = mysqli_query($conn,$query);
	
	header("location:idex.php");














?>