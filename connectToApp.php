<?php
include "keys/cred.php";
include "databaseConnection.php";
$dbConn = getConnection();

$sql = "SELECT * FROM adminDash ORDER BY transactionID DESC LIMIT 1";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
$transactions = $stmt->fetchAll();

$resultArray = array();
$tempArray = array();

// Loop through each result
 foreach($transactions as $row)
 {
 // Add each result into the results array
 	$tempArray = $row;
     array_push($resultArray, $tempArray);
 }
 
 // Encode the array to JSON and output the results
 echo json_encode($resultArray);


// echo $transactions;

?>