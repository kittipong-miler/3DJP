<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
  <?php

  $id  = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $line = $_REQUEST['line'];

  require('connect.php');

  $sql = "
    SELECT * 
    FROM products
    WHERE productCode like '$id%' 
          and productName like '$name%'
          and productLine like '$line%'
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
        <div align="center">ProductCode</div>
      </th>
      <th width="100">
        <div align="center">Name</div>
      </th>
      <th width="100">
        <div align="center">Line</div>
      </th>
      <th width="100">
        <div align="center">Scale</div>
      </th>
      <th width="100">
        <div align="center">Vendor</div>
      </th>
      <th width="100">
        <div align="center">Description</div>
      </th>
      <th width="100">
        <div align="center">quantityInStock</div>
      </th>
        <th width="100">
        <div align="center">buyPrice</div>
      </th>
      <th width="100">
        <div align="center">MSRP</div>
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
        <td><?php echo $objResult["productCode"]; ?></td>
        <td><?php echo $objResult["productName"]; ?></td>
        <td><?php echo $objResult["productLine"]; ?></td>
        <td><?php echo $objResult["productScale"]; ?></td>
        <td><?php echo $objResult["productVendor"]; ?></td>

        <td><?php echo $objResult["productDescription"]; ?></td>
        <td><?php echo $objResult["quantityInStock"]; ?></td>
        <td><?php echo $objResult["buyPrice"]; ?></td>
        <td><?php echo $objResult["MSRP"]; ?></td>
        <td align="center"><a href="deletedata.php?productCode=<?php echo $objResult["productCode"]; ?>">Delete</a></td>
        <td align="center"><a href="5update5.php?productCode=<?php echo $objResult["productCode"]; ?>">Update</a></td>
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