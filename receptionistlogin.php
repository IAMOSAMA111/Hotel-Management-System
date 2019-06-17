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
	background-size: 2500px 900px;
}

#idbox{
		height:40px;
		width: 300px;
		font-size: 30px;
}

#submit{
	width: 130px;
	font-size: 20px;

}
.lab{

	font-size:40px;
	color:white;
}


</style>

<body background="hotel2.jpg"  id="b1">
	<h1 id="h1">Receptionist Portal</h1>
	</br>
	</br>
	</br>
	<center>
	<form action="receptionistloginauthentication.php" method="post">
	<label class="lab" >CNIC:  </label>
	<input  id ="idbox" type="text" name="recep_cnic" value=""></br></br>

	<label class="lab" >Password: </label>
  <input  id ="idbox" type="password" name="recep_pass" value="">
  <br><br>
  <input id="submit" type="submit" value="Submit">
</form>

</center>

<?php

?>

</body>
</html>
