<?php
include ("managerconnection.php");
$query="SELECT roomID,rommTypeName,roomAvailibility,room_price
FROM mydb.room
INNER JOIN mydb.roomtype
ON room.roomType_roomTypeID = roomtype.roomTypeID;";
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
        <th>Room No</th>
        <th>Name</th>
        <th>Availibility</th>
        <th>Price</th>
      </t>

      <?php

        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
              <td><?php echo $row['roomID']; ?></td>
              <td><?php echo $row['rommTypeName']; ?></td>
              <td><?php echo $row['roomAvailibility']; ?></td>
              <td><?php echo $row['room_price']; ?></td>
          </tr>
          <?php
        }
        ?>
  </table>

</body>


</html>
