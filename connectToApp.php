<?php
include "keys/cred.php";
include "databaseConnection.php";
$dbConn = getConnection($dbPass);

$sql = "SELECT * FROM adminDash";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
$transactions = $stmt->fetchAll();

echo $transactions;

?>