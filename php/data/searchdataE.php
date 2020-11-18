<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
  <?php

  $id  = $_REQUEST['id'];
  $Fname = $_REQUEST['Fname'];
  $Lname = $_REQUEST['Lname'];
  $title = $_REQUEST['title'];
  require('connect.php');

  $sql = "
    SELECT * 
    FROM employees
    WHERE employeeNumber like '$id%' 
          and firstName like '$Fname%'
          and lastName like '$Lname%'
          and jobTitle like '$title%'
     ;
    ";

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1">
    <tr>
      <th width="50">
        <div align="center">No</div>
      </th>
      <th width="100">
        <div align="center">EmployeeID</div>
      </th>
      <th width="100">
        <div align="center">Name</div>
      </th>
      <th width="100">
        <div align="center">Email</div>
      </th>
      <th width="100">
        <div align="center">Report_to</div>
      </th>
      <th width="100">
        <div align="center">job_Title</div>
      </th>
      <th width="100">
        <div align="center">Delete</div>
      </th>
      <th width="100">
        <div align="center">Update</div>
      </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["employeeNumber"]; ?></td>
        <td><?php echo $objResult["firstName"]; ?></td>
        <td><?php echo $objResult["email"]; ?></td>
        <td><?php echo $objResult["reportsTo"]; ?></td>
        <td><?php echo $objResult["jobTitle"]; ?></td>
        <td align="center"><a href="deletedata.php?employeeNumber=<?php echo $objResult["employeeNumber"]; ?>">Delete</a></td>
        <td align="center"><a href="5update5.php?employeeNumber=<?php echo $objResult["employeeNumber"]; ?>">Update</a></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>