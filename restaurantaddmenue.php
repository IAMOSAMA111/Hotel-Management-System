<?php
	include("managerconnection.php");
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
	<h1 id="h2">Resturant food </h1>
	</br>
	</br>
	</br>
	<center>
	<div class ="login_form">
	<form action="" method="GET">
	<table>
	<tr>
		<td class="label">Name </td>
		<td><input  id ="idbox" type="text" name="item_name" value="" required><br><br></td>
	</tr>
  <tr>
		<td class="label">Price  </td>
		<td><input  id ="idbox" type="text" name="item_price" value="" required><br><br></td>
	</tr>


	</table>
	<td><input id="submit" type="submit" name="Submit" value="Submit"><br><br></td>

	</form>
</div>
</center>

<?php
$mname=	 $_GET['item_name'];
$mprice= $_GET['item_price'];

$query1="INSERT INTO mydb.restaurant
				 VALUES ('','$mname','$mprice')";
$data = mysqli_query($conn,$query1);
if($data==false){
	echo mysqli_error($conn);
}
else{
	exit;
}
?>

</body>
</html>
