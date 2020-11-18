<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php
require('connect.php');

$PID   = $_REQUEST['productCode'];
$PName	  = $_REQUEST['Pname'];
$PLine		  = $_REQUEST['productLine'];
$PScale		  = $_REQUEST['scale'];
$Vendor		  = $_REQUEST['vendor'];
$Des	  	= $_REQUEST['des'];
$Quantity		  = $_REQUEST['quantity'];
$Price 		= $_REQUEST['price'];
$MSRP		  = $_REQUEST['msrp'];

$sql = "
	INSERT INTO products
	VALUES('$PID','$PName','$PLine','$PScale',
	'$Vendor','$Des','$Quantity','$Price','$MSRP');
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