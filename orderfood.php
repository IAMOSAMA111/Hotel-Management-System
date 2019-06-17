<?php
$servername="localhost";
$username="Guest";
$password="guest";
$dbname="mydb";

$conn = mysqli_connect($servername,  $username, $password, $dbname);

    $optionmenu = mysqli_query($conn,"SELECT food_id from mydb.restaurant");
	error_reporting(0);

 ?>

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
#list{

}



</style>

<body background="coridoor.jpg"  id="b1">
	<h1 id="h1">Welcome to the Guest Portal</h1>
	</br>
	</br>
	</br>
	</br>
	<center>
  	<div class ="login_form">
  	<form action="" method="GET">
  	<table>
      <ul id="list">
  <li>1.Breakfast</li>
  <li>2.Lunch</li>
  <li>3.Dinner</li>
</ul>
      <tr>
        <td class="label">CNIC</td>
        <td><input  id ="idbox" type="text" name="guest_cnic" value="" required><br><br></td>
      </tr>

      <select name = "foodid" style="height=40px;">
        <?php
          while($row = $optionmenu->fetch_assoc())
          {
            $food_id = $row['food_id'];
            echo "<option value = '$food_id'>$food_id</option>";
          }
         ?>
    	</select>
  	</table>
  	<td><input id="submit" type="submit"  value="Submit"><br><br></td>

  	</form>
  </div>
  </center>
  <?php
  $mcnic= $_GET['guest_cnic'];
  $fid= $_GET['foodid'];

  $servername="localhost";
  $username="Guest";
  $password="guest";
  $dbname="mydb";

  $conn = mysqli_connect($servername,  $username, $password, $dbname);

  $query1 = ("SELECT guestID from mydb.guest
  where user_CNIC = '$mcnic'  and guest_status='active' ");
  $getdat = mysqli_query($conn,$query1);
  if($getdat==false){
    echo mysqli_error($conn);
  }
  $result = mysqli_fetch_assoc($getdat);
  $gid=$result['guestID'];

  $query2="INSERT INTO mydb.order values($gid,$fid)";

  $insertdata= mysqli_query($conn,$query2);
  if($insertdata==false){
    echo mysqli_error($conn);
  }
  ?>



</body>
</html>
