<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php
require('connect.php');

$update_PID    = $_REQUEST['productCode'];
$PID   = $update_PID;
$PName		  = $_REQUEST['Pname'];
$PLine		  = $_REQUEST['productLine'];
$PScale		  = $_REQUEST['scale'];
$Vendor	  = $_REQUEST['vendor'];
$Des	  = $_REQUEST['des'];
$Quantity		  = $_REQUEST['quantity'];
$Price = $_REQUEST['price'];
$MSRP		  = $_REQUEST['msrp'];

$sql = "
	UPDATE employee
	SET Pname = '" . $Title . "',  
	Name = '" . $Name . "', 
	Sex = '" . $Sex . "', 
	Education = '" . $Education . "', 
	Start_Date = '" . $Start_Date . "', 
	Salary = '" . $Salary . "', 
	DepartmentID = '" . $DepartmentID . "' 
	WHERE EmployeeID = " . $EmployeeID . " ; ";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "Record " . $update_ID . " was Updated.";
} else {
	echo "Error : Update";
}
mysqli_close($conn); // ปิดฐานข้อมูล
echo "<br><br>";
echo "--- END ---";
?>