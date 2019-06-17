<!DOCTYPE html>
<html>
<head>
	<title> Add Guest</title>

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
	<h1 id="h1">Receptionist Information</h1>
	</br>
	</br>
	</br>
	<center>
	<div class ="login_form">
	<form action="">
	<table>
	<tr>
		<td class="label">Name  </td>
		<td><input  id ="idbox" type="text" name="manager_name" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label">Phone  </td>
		<td><input  id ="idbox" type="text" name="manager_ph" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label">Email   </td>
		<td><input  id ="idbox" type="email" name="manager_email" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label">Address   </td>
		<td><input  id ="idbox" type="text" name="manager_address" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label"> Country </td>
		<td><input  id ="idbox" type="text" name="manager_country" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label">DOB   </td>
		<td><input  id ="idbox" type="text" name="manager_DOB" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label">CNIC</td>
		<td><input  id ="idbox" type="text" name="manager_cnic" value=""><br><br></td>
	</tr>


	</table>
	<td><input id="submit" type="submit" name="Submit"><br><br></td>

	</form>
</div>
</center>

<?php

?>

</body>
</html>
