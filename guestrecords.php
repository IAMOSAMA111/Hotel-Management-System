<?php
include ("managerconnection.php");
$query="SELECT * From(

SELECT
    user_name,
    CNIC,guest_status,
    room_roomID,
    totalPrice AS Amount
FROM
   mydb.user
INNER JOIN
    mydb.guest ON user.CNIC = guest.user_CNIC
INNER JOIN
    mydb.payment ON payment.guest_guestID=guest.guestID) As Active  where guest_status='active'";
$result=mysqli_query($conn,$query);
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
        <th>Status</th>
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
              <td><?php echo $row['guest_status']; ?></td>
              <td><?php echo $row['room_roomID']; ?></td>
              <td><?php echo $row['Amount']; ?></td>
          </tr>
          <?php
        }
        ?>
  </table>

</body>


</html>
