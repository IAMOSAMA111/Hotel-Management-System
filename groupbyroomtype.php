<?php
	include("managerconnection.php");
	error_reporting(0);
  $query1="SELECT roomtype_roomtypeID as ID, count(roomtype_roomtypeID)
   as num FROM guest natural join room group by roomtype_roomtypeID";
$result=mysqli_query($conn,$query1);

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
        <th>Room ID</th>
        <th>Total Available Rooms</th>
      </t>

      <?php

        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
              <td><?php echo $row['ID']; ?></td>
              <td><?php echo $row['num']; ?></td>
          </tr>
          <?php
        }
        ?>
  </table>

</body>


</html>
