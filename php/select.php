<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  require('connect.php');

  $sql = '
    SELECT * 
    FROM employees;
    ';

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

