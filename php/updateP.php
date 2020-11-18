<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
    <?php
    require('connect.php');

    $sql = '
    SELECT *
    FROM products;
    ';

    $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    ?>
    <h2>Update Data : Product</h2>
    <form action="data/updatedataP.php" method="post" name="products">
        <table border="1">
            <tr>
                <td>Product ID : </td>
                <td><select name="productCode">
                        <?php
                        while ($objResult = mysqli_fetch_array($objQuery)) {
                        ?>
                            <option value=<?php echo $objResult["productCode"]; ?>><?php echo $objResult["productCode"]; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <!-- <tr>
                <td>Title : </td>
                <td><select name="Title">
                        <option value=นาย>นาย</option>
                        <option value=นางสาว>นางสาว</option>
                        <option value=นาง>นาง</option>
                    </select>
                </td>
            </tr> -->
            <tr>
                <td>Product Name : </td>
                <td><input type="text" name="Pname"></td>
            </tr>
            <tr>
                <td>Product Line : </td>
                <td><input type="text" name="Pline"></td>
            </tr>
            <!-- <tr>
                <td>Product Line : </td>
                <td>
                    <input type="radio" name="Sex" value="ชาย"> ชาย
                    <input type="radio" name="Sex" value="หญิง"> หญิง
                </td>
            </tr> -->
            <!-- <tr>
                <td>Education : </td>
                <td><select name="Education">
                        <option value=ปริญญาตรี>ปริญญาตรี</option>
                        <option value=ปริญญาโท>ปริญญาโท</option>
                        <option value=อื่นๆ>อื่นๆ</option>
                    </select>
                </td>
            </tr> -->
            <tr>
                <td>Scale : </td>
                <td><input type="text" name="scale"></td>
            </tr>
            <tr>
                <td>Vendor : </td>
                <td><input type="text" name="vendor"></td>
            </tr>
            <tr>
                <td>Description : </td>
                <td><input type="text" name="des"></td>
            </tr>
            <tr>
                <td>Quantity : </td>
                <td><input type="number" name="quantity"></td>
            </tr>
            <tr>
                <td>Buy Price : </td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>MSRP : </td>
                <td><input type="text" name="msrp"></td>
            </tr>
            
        </table>

        <br>
        <input type="submit" value="Update Data">
    </form>
    
</body>

</html>