<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
    <h2>Search Data of Product</h2>
    <form action="data/searchdataP.php" method="GET" name="products">
        <table border="1">
            <tr>
                <td> Product ID : </td>
                <td><input type="text" name="id"></td>

                <td> Product name : </td>
                <td><input type="text" name="name"></td>

                <td> Product line : </td>
                <td><input type="text" name="line"></td>

                
            </tr>
        </table>

        <br>
        <input type="submit" value="Search Data">
    </form>
</body>

</html>