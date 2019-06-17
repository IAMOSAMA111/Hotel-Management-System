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
