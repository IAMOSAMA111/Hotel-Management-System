<?php
$groom=	 $_GET['room_no'];
$gcinic= $_GET['guest_cnic'];
$servername="localhost";
$username="receptionist";
$password="recep";
$dbname="mydb";

$conn = mysqli_connect($servername,  $username, $password, $dbname);
$query="SELECT
    user_name,
    CNIC,
    room_roomID,
    totalPrice AS Amount
FROM
   mydb.user
INNER JOIN
    mydb.guest ON user.CNIC = guest.user_CNIC
INNER JOIN
    mydb.payment ON payment.guest_guestID=guest.guestID where user.CNIC='$gcinic'";
$result=mysqli_query($conn,$query);

$updatestatusguest= ("UPDATE mydb.guest set guest_status ='deactive' where user_CNIC='$gcinic'");
$up1=mysqli_query($conn,$updatestatusguest);
$updatestatusroom="UPDATE mydb.room set roomAvailibility ='Yes' where roomID='$groom'";
$up2=mysqli_query($conn,$updatestatusroom);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <title> Room Record</title>
 </head>
 <body>
  <table align="center" border="1px" style="width=500%; line-height= 100%;">
      <tr>
        <th colspan="2"><h2> Room Record</h2></th>
      </tr>
      <t>
        <th>Name</th>
        <th>CNIC</th>
        <th>Room Number</th>
        <th>Bill</th>
      </t>

      <?php

        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
              <td><?php echo $row['user_name']; ?></td>
              <td><?php echo $row['CNIC']; ?></td>
              <td><?php echo $row['room_roomID']; ?></td>
              <td><?php echo $row['Amount']; ?></td>
          </tr>
          <?php
        }
        ?>
  </table>


 </body>


 </html>
