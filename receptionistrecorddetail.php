<?php
include ("managerconnection.php");
$query="SELECT user_name, phone_no,email,address,country,DOB,CNIC,
receptionistSalary
FROM mydb.receptionist
INNER JOIN mydb.user
ON user.CNIC = receptionist.user_CNIC";
$result=mysqli_query($conn,$query);
 ?>

<!DOCTYPE html>
<html>
<head>
<title> Receptionist Record</title>
</head>
<body>
  <table align="center" border="1px" style="width=600px; line-height= 40px;">
      <tr>
        <th colspan="2"><h2> Receptionist Record</h2></th>
      </tr>
      <t>
        <th>Name</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Address</th>
        <th>Country</th>
        <th>DOB</th>
        <th>CNIC</th>
        <th>Salary</th>
      </t>

      <?php

        while($row=mysqli_fetch_assoc($result))
        {
          ?>
          <tr>
              <td><?php echo $row['user_name']; ?></td>
              <td><?php echo $row['phone_no']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['country']; ?></td>
              <td><?php echo $row['DOB']; ?></td>
              <td><?php echo $row['CNIC']; ?></td>
              <td><?php echo $row['receptionistSalary']; ?></td>

          </tr>
          <?php
        }
        ?>
  </table>

</body>


</html>
