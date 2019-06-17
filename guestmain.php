<!DOCTYPE html>
<html>
<head><title>Guest Portal</title></head>

<style>

#h1{
	text-align: center;
	font-size: 80px;
	color:white;
}
#h2{
	color: white;
	font-size: 40px;
}

#b1{
	background-size: 1850px 900px;
}

#idbox{
		height:40px;
		width: 300px;
		font-size: 30px;
}

#submit{
	width: 150px;
	font-size: 20px;

}



</style>

<body background="coridoor.jpg"  id="b1">
	<h1 id="h1">Welcome to the Guest Portal</h1>
	</br>
	</br>
	</br>
	</br>
	<center>
	<h2 id="h2">Please enter your CNIC</h2>
	<form action="showguestdata.php" method="GET">
  <input  id ="idbox" type="text" name="guestCNIC" value="" required>
  <br><br>
  <input id="submit" type="submit" value="Submit">
</form>
</center>

<?php

?>

</body>
</html>
