<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
    <h2>Insert Data : Customer</h2>
    <form action="data/insertdataC.php" method="post" name="customers">
        <table border="1">
            <tr>
                <td>Customer ID : </td>
                <?php 
                require('connect.php');
                $sql = '
                SELECT MAX(customerNumber) AS max
                FROM customers;
                ';
                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td>
                <?php $objResult = mysqli_fetch_array($objQuery) ?>
                <input type="text" name="customerNumber" value = <?php echo $objResult["max"]+1; ?>>
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
                <td>Customer Name : </td>
                <td><input type="text" name="Cname"></td>
            </tr>
            <tr>
                <td>Contact Last Name : </td>
                <td><input type="text" name="Lname"></td>
            </tr>
            <tr>
                <td>Contact First Name : </td>
                <td><input type="text" name="Fname"></td>
            </tr>
            <tr>
                <td>Phone : </td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>AddressLine 1 : </td>
                <td><input type="address" name="addr1"></td>
            </tr>
            <tr>
                <td>AddressLine 2 : </td>
                <td><input type="address" name="addr2"></td>
            </tr>
            <tr>
                <td>City : </td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>State : </td>
                <td><input type="text" name="state"></td>
            </tr>
            <tr>
                <td>Postal Code : </td>
                <td><input type="text" name="postal"></td>
            </tr>
            <tr>
                <td>Country : </td>
                <td><input type="text" name="country"></td>
            </tr>

            <tr>
                <td>Sales RepEmployee ID : </td>
                <?php
                require('connect.php');
                $employeeID = $_REQUEST['employeeID'];
                $sql = "
                SELECT employeeNumber
                FROM employees
                WHERE employeeNumber = '$employeeID' 
                ;
                ";

                $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
                ?>
                <td>
                <?php $objResult = mysqli_fetch_array($objQuery) ?>
                <input type="text" name="employeeNumber" value = <?php echo $objResult["employeeNumber"]; ?>
                ></td>
            </tr>
            <tr>
                <td>Credit Limit : </td>
                <td><input type="number" name="credit"></td>
            </tr>

            <!-- <tr>
                <td>Sex : </td>
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
            
        </table>

        <br>
        <input type="submit" value="Insert Data">
    </form>
    
</body>

</html>