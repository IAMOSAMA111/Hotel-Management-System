<?php
	include("managerconnection.php");
	error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>

#h1{
	text-align: center;
	font-size: 70px;
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
.label{

	font-size:30px;
	color:white;
}
.login_form input[type="text"]{
		height:40px;
		width: 300px;
		font-size: 30px;

}
#submit{
	width: 130px;
	font-size: 20px;

}

</style>
</head>
<body background="hotel2.jpg"  id="b1">
	<h1 id="h1">Manager SignUp</h1>
	</br>
	</br>
	</br>
	<center>
	<div class ="login_form">
	<form action="billgenerate.php" method="GET">
	<table>
	<tr>
		<td class="label">Room No  </td>
		<td><input  id ="idbox" type="text" name="room_no" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">CNIC  </td>
		<td><input  id ="idbox" type="text" name="guest_cnic" value="" required><br><br></td>
	</tr>
	</table>
	<td><input id="submit" type="submit" name="Submit" value="Submit"><br><br></td>

	</form>
</div>
</center>

</body>
</html>
