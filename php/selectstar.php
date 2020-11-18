<body>
  <?php
  require('connect.php');

  $sql = '
    SELECT * 
    FROM products;
    ';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1">
    <tr>
      <th width="50">
        <div align="center">No</div>
      </th>
      <th width="100">
        <div align="center">productCode</div>
      </th>
      <th width="100">
        <div align="center">productName</div>
      </th>
      <th width="100">
        <div align="center">productLine</div>
      </th>
      <th width="100">
        <div align="center">productScale</div>
      </th>
      <th width="100">
        <div align="center">productVendor</div>
      </th>
      <th width="100">
        <div align="center">productDescription</div>
      </th>
      <th width="100">
        <div align="center">quantityInStock</div>
      </th>
      <th width="100">
        <div align="center">buyPrice</div>
      </th>
      <th width="100">
        <div align="center">"MSRP</div>
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