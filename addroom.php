<!DOCTYPE html>
<html>
<head>
	<title> Add Receptionist</title>

<style>

#h1{
	text-align: center;
	font-size: 70px;
	color:white;
}
#h2{
  text-align: center;
	color: white;
	font-size: 40px;
}

#b1{
	background-size: 2500px 900px;
}

#idbox{
		height:40px;
		width: 250px;
		font-size: 30px;
}
#sel{
		height:40px;
		width: 250px;
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
  display:block;
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
	<h1 id="h2">Room DateEntry</h1>
	</br>
	</br>
	</br>
	<center>
	<div class ="login_form">
	<form action="">
	<table>

    <tr>
  		<td class="label">Avalibility </td>
  		<td><select id="sel">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select><br><br></td>
  	</tr>

	<tr>
		<td class="label">Price</td>
		<td><input  id ="idbox" type="text" name="manager_name" value=""><br><br></td>
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
