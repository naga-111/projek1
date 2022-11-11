<doctype html>
<html>
	<head> 
	<title>WELCOME ASS</title>
	<h1><br><center>PERMOHONAN JAWATAN</center></h1><br>
	</head>
	
	<style>
		table
		{
		border-collapse:collapse;
		width:50%
		}
		td, th
		{
		border:2px solid #dddddd;
		padding:8px;
		}
		
	</style>
		
	<body>
	<h2>MAKLUMAT PERIBADI</h2><br>
	
	<form method="post" action="create.php">
	
	<label for="fname" >Nama:</label>
	<input type="text" id="fname" name="fname" placeholder="Nama"><br><br>
	
	<label for="fname" >No.Kad Pengenalan:</label>
	<input type="text" id="fname" name="ic" placeholder="Contoh 950208125427"><br><br>
	
	<label for="fname" >Tarikh Lahir:</label>
	<input type="date" id="fname" name="date" placeholder="Contoh 08/02/1995"><br><br>
	
	<label for="fname" >Umur:</label>
	<input type="number" id="fname" name="number" placeholder=""><br><br>
	
	<label for="fname" >Alamat:</label>
	<input type="text" id="fname" name="address" value=""size="50"><br><br>
	<input type="Submit" name="create" value"Submit"><br><br> 
	</form><br>
	
	
	
	
	<table>
	<tr>
	<td>Kategori</th>
	<td>Nama Sijil</th>
	<td>Sijil</th>
	<td>Edit</th>
	</tr>
	
	<tr>
	<td>SPM</td>
	<td>1. SIJIL PELAJARAN MALAYSIA</td>
	<td>Sijil</td>
	<td>Edit</td>
	</tr>
	
	<tr>
	<td>STPM</td>
	<td>2. SIJIL TINGGI PELAJARAN MALAYSIA</td>
	<td>Sijil</td>
	<td>Edit</td>
	</tr>
	
	<tr> 
	<td>DIPLOMA</td>
	<td>3. DIPLOMA KOMPUTER</td>
	<td>Sijil</td>
	<td>Edit</td>
	</tr>
	
	<tr> 
	<td>IJAZAH</td>
	<td>4. IJAZAH KOMPUTER</td>
	<td>Sijil</td>
	<td>Edit</td>
	</tr>
	
	
	</table>
	
	<h1>DELETE</h1>
	<?php
	
		$conn = mysqli_connect("localhost","root","","maklumat");
		$query = "SELECT * FROM data";
		$result = mysqli_query($conn,$query);
		
		echo "<table>";
			echo "<tr>";
				echo "<th>nama</th>";
				echo "<th>ic</th>";
				echo "<th>NoKadPengenalan</th>";
				echo "<th>umur</th>";
				echo "<th>alamat</th>"; 
				echo "<th>edit</th>";
				echo "<th>delete</th>";
			echo "</tr>";
		
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
				echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['nokp']."</td>";
				echo "<td>".$row['tarikhlahir']."</td>";
				echo "<td>".$row['umur']."</td>";
				echo "<td>".$row['alamat']."</td>";
				echo "<td><a href='editform.php?ganti=".$row['Id']."'>edit</a></td>";
				echo "<td><a href='Delete.php?remove=".$row['Id']."'>Delete</a></td>";
			echo "</tr>"; 
		}
		echo "</table>";
	
	?>
	</body>
	
</html>