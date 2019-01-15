<?php
date_default_timezone_set('America/Los_Angeles');

// include "keys/cred.php";

include "databaseConnection.php";
$dbConn = getConnection();

$sql = 'DELETE * FROM adminDash WHERE transactionID != 1';

try{
$stmt = $dbConn->prepare($sql);
$stmt->execute();
} catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>