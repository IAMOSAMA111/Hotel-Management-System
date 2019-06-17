<?php
$mcnic = $_POST['recep_cnic'];
$mpass = $_POST['recep_pass'];
$servername="localhost";
$username="receptionist";
$password="recep";
$dbname="mydb";
$conn = mysqli_connect($servername,  $username, $password, $dbname);
      $query=("SELECT * FROM mydb.receptionist WHERE
      user_CNIC = '$mcnic'
			AND receptionistPassword = '$mpass'");
			$result = mysqli_query($conn,$query);
			$count = mysqli_num_rows($result);

			if($count==1){
				echo "login Successfull";
				header("location:receptionistmain.php");
			}
			else{
        header("location:receptionistlogin.php");
        echo "incorect info";
			}
 ?>
