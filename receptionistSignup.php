<?php
	include("managerconnection.php");
	error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Manager SignUp</title>
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
	<form action="" method="GET">
	<table>
	<tr>
		<td class="label">Name  </td>
		<td><input  id ="idbox" type="text" name="manager_name" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Phone  </td>
		<td><input  id ="idbox" type="text" name="manager_ph" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Email   </td>
		<td><input  id ="idbox" type="email" name="manager_email" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Address   </td>
		<td><input  id ="idbox" type="text" name="manager_address" value=""><br><br></td>
	</tr>
	<tr>
		<td class="label"> Country </td>
		<td><input  id ="idbox" type="text" name="manager_country" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">DOB   </td>
		<td><input  id ="idbox" type="text" name="manager_DOB" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">CNIC</td>
		<td><input  id ="idbox" type="text" name="manager_cnic" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Salary</td>
		<td><input  id ="idbox" type="text" name="manager_salary" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Password   </td>
		<td><input  id ="idbox" type="password" name="manager_password" value="" required><br><br></td>
	</tr>
	</table>
	<td><input id="submit" type="submit"  value="Submit"><br><br></td>

	</form>
</div>
</center>

<?php
 $mname=	 $_GET['manager_name'];
 $mph= $_GET['manager_ph'];
 $memail= $_GET['manager_email'];
 $maddress= $_GET['manager_address'];
 $mcountry=	$_GET['manager_country'];
 $mdob=	$_GET['manager_DOB'];
 $mcnic= $_GET['manager_cnic'];
 $msalary=	$_GET['manager_salary'];
 $mpass=	$_GET['manager_password'];

 $query1="INSERT INTO mydb.user
  				VALUES ('$mcnic','$mname','$mph','$memail','$maddress','$mcountry','$mdob')";
 $data = mysqli_query($conn,$query1);
 if($data==false){
 	echo mysqli_error($conn);
 }
 $data2=mysqli_query($conn);
 $query2 = "INSERT INTO mydb.receptionist VALUES ('',$msalary,'$mpass','$mcnic')";
$data2=mysqli_query($conn,$query2);
if($data2==false){
 echo mysqli_error($conn);
}
else {
	header("location:receptionistSignup.php");
	exit;
}
?>
</body>
</html>
