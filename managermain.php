<?php
include("managerconnection.php");
error_reporting(0);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Guest Portal</title>

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

	font-size:30px;
	color:white;
}
.login_form input[type="text"]{
		display:-webkit-box;
		height:40px;
		width: 300px;
		font-size: 30px;

}

</style>
</head>
<body background="hotel2.jpg"  id="b1">
	<h1 id="h1">Manager Portal</h1>
	</br>
	</br>
	</br>
	<center>
	<div class ="login_form">
	<form action="managerloginauthentication.php" method="post">
	<label class="lab" >CNIC </label>
	<input  id ="idbox" type="text" name="manager_cnic" value=""></br></br>
	<label class="lab" >Password </label></br>
  <input  id ="idbox" type="password" name="manager_pass" value=""><br><br>
  <input id="submit" type="submit" value="Submit">
</div>
</form>
<h2><a href="managersignup.php">not have an account.</a></h2>
</center>



</body>
</html>
