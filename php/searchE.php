<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
    <h2>Search Data of Employee </h2>
    <form action="data/searchdataE.php" method="GET" name="employees">
        <table border="1">
            <tr>
                <td> Employee ID : </td>
                <td><input type="text" name="id"></td>

                <td> First name : </td>
                <td><input type="text" name="Fname"></td>

                <td> Last name : </td>
                <td><input type="text" name="Lname"></td>

                <td> office : </td>
                <td><input type="text" name="office"></td>

                <td> Report to : </td>
                <td><input type="text" name="report"></td>

                <td> Title : </td>
                <td><input type="text" name="title"></td>
            </tr>
        </table>

        <br>
        <input type="submit" value="Search Data">
    </form>
</body>

</html>