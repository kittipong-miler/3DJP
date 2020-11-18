<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php
require('connect.php');

$CustomerID   = $_REQUEST['customerNumber'];
$CusName	  = $_REQUEST['Cname'];
$Lame		  = $_REQUEST['Lname'];
$FName		  = $_REQUEST['Fname'];
$Phone		  = $_REQUEST['phone'];
$Addr1	  	= $_REQUEST['addr1'];
$Addr2		  = $_REQUEST['addr2'];
$City 		= $_REQUEST['city'];
$State		  = $_REQUEST['state'];
$PostalCode 		= $_REQUEST['postal'];
$Country		  = $_REQUEST['country'];
$RepEmpID  		= $_REQUEST['employeeNumber'];
$CreditLimit		  = $_REQUEST['credit'];

$sql = "
	INSERT INTO customers
	VALUES('$CustomerID','$CusName','$LName','$FName',
	'$Phone','$Addr1','$Addr2','$City','$State','$PostalCode',
	'$Country','$RepEmpID','$CreditLimit');
	";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "New record Inserted successfully";
} else {
	echo "Error : Input";
}

mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>