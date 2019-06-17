<?php
	include("receptionistconnection.php");

    $optionmenu = mysqli_query($conn,"SELECT roomID from mydb.room where roomAvailibility='Yes' and
    roomType_roomTypeID=3");
	error_reporting(0);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Deluxe Room</title>
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
	<h1 id="h1">Deluxe Room</h1>
	</br>
	<center>
	<div class ="login_form">
	<form action="" method="GET">
	<table>
    <select name = "roomavailible" style="height=40px;">
      <?php
        while($row = $optionmenu->fetch_assoc())
        {
          $room_id = $row['roomID'];
          echo "<option value = '$room_id'>$room_id</option>";
        }
       ?>
  	</select>
	<tr>
		<td class="label">CNIC</td>
		<td><input  id ="idbox" type="text" name="guest_cnic" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Vehicale name</td>
		<td><input  id ="idbox" type="text" name="guest_vehiclename" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Vehicale number</td>
		<td><input  id ="idbox" type="text" name="guest_vehicleno" value="" required><br><br></td>
	</tr>
	<tr>
		<td class="label">Guest Status</td>
		<td><select name="gueststatus">
  	<option value="active">Check In</option>
	</tr>

	<tr>
		<td class="label">Nights  </td>
		<td><input  id ="idbox" type="text" name="nights" value="" required><br><br></td>
	</tr>
	<tr>

	</table>
	<td><input id="submit" type="submit"  value="Submit"><br><br></td>

	</form>
</div>
</center>

<?php
 $mcnic= $_GET['guest_cnic'];
 $mvehiclename=	$_GET['guest_vehiclename'];
 $mvehicleno=	$_GET['guest_vehicleno'];
 $gstatus=$_GET['gueststatus'];
 $ravail= $_GET['roomavailible'];
 $rnights=$_GET['nights'];



 $queryupdate="UPDATE room set roomAvailibility='No' where roomID='$ravail' ";
 $data4=mysqli_query($conn,$queryupdate);

 $query2 = "INSERT INTO mydb.guest VALUES ('','$ravail',NULL,NULL,
	'$gstatus','$mcnic')";

$data2=mysqli_query($conn,$query2);
if($data2==false){
 echo mysqli_error($conn);
}
$getdata2=mysqli_insert_id($conn);

$rnights=$_GET['nights'];
$ammount = $rnights * 15000;

$query4 = "INSERT INTO mydb.payment VALUES ('',$ammount,'$getdata2')";
$insertpayment = mysqli_query($conn,$query4);
if($data==false){
 echo mysqli_error($conn);
}
error_reporting(0);

$query3="INSERT INTO mydb.parking VALUES('','$mvehiclename','$mvehicleno','$getdata2')";
$data =mysqli_query($conn,$query3);

if($data==false){
 echo mysqli_error($conn);
 error_reporting(0);

}
else{
	header("location=exsistPresidentialSuitbooking.php");
	exit;
}
?>
</body>
</html>
