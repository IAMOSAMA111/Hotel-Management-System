<?php
include ("managerconnection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Add Room type</title>

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
	<h1 id="h2">Room Type DateEntry</h1>
	</br>
	</br>
	</br>
	<center>
	<div class ="login_form">
	<form action="" methood="GET">
	<table>
	<tr>
		<td class="label">Name </td>
		<td><input  id ="idbox" type="text" name="type_name" value="" required><br><br></td>
	</tr>
  <tr>
		<td class="label">Price  </td>
		<td><input  id ="idbox" type="text" name="type_price" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Discription </td>
		<td><textarea  name="type_dis"rows="4" cols="50">
      </textarea><br><br></td>
	</tr>
	</table>
	<td><input id="submit" type="submit" name="Submit"><br><br></td>

	</form>
</div>
</center>

<?php
$name = $_GET['type_name'];
$price = $_GET['type_price'];
$dis = $_GET['type_dis'];
$query = "INSERT INTO mydb.roomtype VALUES ('','$price','$dis','$name')";
$data = mysqli_query($conn,$query);
 if($data==false){
 	echo mysqli_error($conn);
 }

?>

</body>
</html>
