<?php
date_default_timezone_set('America/Los_Angeles');

date_default_timezone_set('America/Los_Angeles');
date('Y-m-d', strtotime("01/01/2001"));
$startDate = date('m/d/Y', strtotime("01/01/2019"));
$endDate = date('m/d/Y', strtotime("01/01/2019 + 10 days"));

$todaysDate = date("m/d/Y", strtotime(date("m/d/Y")));

while ($todaysDate > $endDate ) 
{
	$startDate = date('m/d/Y', strtotime($startDate . " + 10 days"));
	$endDate = date('m/d/Y', strtotime($endDate . " + 10 days"));
}
// include "keys/cred.php";

include "databaseConnection.php";
$dbConn = getConnection();

$sql = 'INSERT INTO adminDash (logo, uniscoID, employerTaxID, dateOfTrans, name, ssn, employeeID, amtAccessed, remainingBalance, currPayPerEndDate, netAccess, status) 
		VALUES (:logo, :uniscoID, :employerTaxID, :dateOfTrans, :name, :ssn, :employeeID, :amtAccessed, :remainingBalance, :currPayPerEndDate, :netAccess, :status)';

$parameters = array();
$parameters[':logo'] = $_GET['logo'];
$parameters[':uniscoID'] = "U324";
$parameters[':employerTaxID'] = "WM980001";
$parameters[':dateOfTrans'] = date("Y/m/d");
$parameters[':name'] = "Johnny Smith";
$parameters[':ssn'] = "9009";
$parameters[':employeeID'] = "10001";
$parameters[':amtAccessed'] = $_GET['amt'];
$parameters[':remainingBalance'] = $_GET['remaining'];
$parameters[':currPayPerEndDate'] = date('Y/m/d', strtotime($endDate));
$parameters[':netAccess'] = "50";
$parameters[':status'] = $_GET['status'];
try{
$stmt = $dbConn->prepare($sql);
$stmt->execute($parameters);
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>