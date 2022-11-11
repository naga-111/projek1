<html>
<?php

	$conn=mysqli_connect("localhost", "root", "", "maklumat");
	$edits = mysqli_real_escape_string($conn,$_GET['ganti']);
	
?>
<form>
	<input type="text" name="fname" placeholder="nama"/>
	<input type="number" name="age" placeholder="umur"/>
	<input type="date" name="date" placeholder="date"/>
	<input type="number" name="ic" placeholder="number"/>
	<input type="text" name="address" placeholder="address"/>
	
	<input type="hidden" name="id" value="<?php echo $edit;?>"/>
	
	<button type="submit" name="leleq">edit</button>
	
	<form>

</html>
