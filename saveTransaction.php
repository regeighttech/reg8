<?php

date_default_timezone_set('America/Los_Angeles');

include "keys/cred.php";

include "databaseConnection.php";
$dbConn = getConnection();

$sql = "INSERT INTO adminDash (logo, uniscoID, employerTaxID, dateOfTrans, name, ssn, employeeID, amtAccessed, remainingBalance, currPayPerEndDate, netAccess, status) 
		VALUES ("", :uniscoID, :employerTaxID, :dateOfTrans, :name, :ssn, :employeeID, :amtAccessed, :remainingBalance, :currPayPerEndDate, :netAccess, :status)";

$parameters = array();
$parameters[':uniscoID'] = "U324";
$parameters[':employerTaxID'] = "WM980001";
$parameters[':dateOfTrans'] = date("Y-m-d");
$parameters[':name'] = "Johnny Smith";
$parameters[':ssn'] = "9009";
$parameters[':employeeID'] = "10001";
$parameters[':amtAccessed'] = "100";
$parameters[':remainingBalance'] = "100";
$parameters[':currPayPerEndDate'] = date("Y-m-d");
$parameters[':netAccess'] = "50";
$parameters[':status'] = "denied";
$stmt = $dbConn->prepare($sql);

$stmt->execute($parameters);
    
?>