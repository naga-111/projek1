<?php

	if(isset($_POST['create']))
	{
		$conn = mysqli_connect("localhost","root","","maklumat");//konek
		
		//tangkap brg2 dari form
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$nokp = mysqli_real_escape_string($conn, $_POST['ic']);
		$tarikh = mysqli_real_escape_string($conn, $_POST['date']);
		$umur = mysqli_real_escape_string($conn, $_POST['number']);
		$alamat = mysqli_real_escape_string($conn, $_POST['address']);
		
		//ayat2 cinta sql
		$query = "INSERT INTO data(nama,nokp,tarikhlahir,umur,alamat) VALUES ('$fname','$nokp','$tarikh','$umur','$alamat')";
		$result = mysqli_query($conn,$query);//kasi jalan tu sql
		
		header("location:idex.php");//ciao balik p idex.html
		
		
	}

?>