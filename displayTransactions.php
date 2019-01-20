<?php
include "keys/cred.php";
// if(isset($_POST['loginform']))
// {
// 	echo "Sent message {$message->sid}";
// }
// if(isset($_POST['info']))
// {
// 	echo "Hello";
// 	echo "<script> div_showCode();</script>";
// }
include "databaseConnection.php";
$dbConn = getConnection($dbPass);

$sql = "SELECT * FROM adminDash WHERE transactionID != 1";
$stmt = $dbConn->prepare($sql);
$stmt->execute();
$transactions = $stmt->fetchAll();

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Transactions</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

<script src="js/___jquery-2.1.3.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.css">  
<link rel="stylesheet" type="text/css" href="prefixed.css">
<script src="js/popup.js"></script>

<link rel="stylesheet" type="text/css" href="prefixed.css">
<link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css">

<!-- <script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<style>
	.modal-header{
			background-color: #54E2BC;
		}

		.modal-footer button{
			background-color: #00FFC0;
		}
		div {
		  height: 50%;
		  width: 50%;
		  
		}
</style>

</head>

<div>
<body >
	<button id="deleteButton" type="button">Delete Records</button>
	<table id="myTable" class="display">
	    <thead>
	        <tr>
	            <th>Service Provider Logo</th>
	            <th>Employer Logo</th>
	            <th>Unisco ID#</th>
	            <th>Employer Tax ID#</th>
	            <th>Date of Transaction</th>
	            <th>Name</th>
	            <th>SSN</th>
	            <th>Employee ID#</th>
	            <th>Prev. Balance</th>
	            <th>Amt. Accessed</th>
	            <th>Remaining Balance</th>
	            <th>Current Pay Period End Date</th>
	            <th>% Net Access</th>
	            <th>Status</th>
	        </tr>
	    </thead>
	    <tbody>
	       
	        	<?php
	        	foreach($transactions as $row)
	        	{
	        		$prevBalance = $row['amtAccessed'] + $row['remainingBalance'];
	        		$netAccessed = number_format($prevBalance/$row['amtAccessed'],2);

	        		echo "<tr>";
	        		echo "<td>" . '<img style="display:block width="10%" height="10%"" src="img/' . $row['logo'] . '.jpeg"/></td>';
	        		echo "<td>" . '<img style="display:block width="10%" height="10%"" src="img/targetLogo.jpeg"/></td>';
	        		echo "<td>U" . $row['transactionID'] . "</td>";
	        		echo "<td>" . $row['employerTaxID'] . "</td>";
	        		echo "<td>" . date_format(date_create($row['dateOfTrans']),"m/d/Y") . "</td>";
	        		echo "<td>" . $row['name'] . "</td>";
	        		echo "<td>" . $row['ssn'] . "</td>";
	        		echo "<td>" . $row['employeeID'] . "</td>";
	        		echo "<td>" . $prevBalance . "</td>";
	        		echo "<td>$" . $row['amtAccessed'] . "</td>";
	        		echo "<td>" . $row['remainingBalance'] . "</td>";
	        		echo "<td>" . date_format(date_create($row['currPayPerEndDate']),"m/d/Y") . "</td>";
	        		echo "<td>" . $netAccessed . "%</td>";
	        		echo "<td>" . $row['status'] . "</td>";
	        		echo "</tr>";
	        	}
	        	?>
	            <!-- <td>Row 1 Data 1</td>
	            <td>Row 1 Data 2</td>
	            <td>Row 1 Data 1</td>
	            <td>Row 1 Data 2</td>
	            <td>Row 1 Data 1</td>
	            <td>Row 1 Data 2</td>
	            <td>Row 1 Data 1</td>
	            <td>Row 1 Data 2</td>
	            <td>Row 1 Data 1</td>
	            <td>Row 1 Data 2</td>
	            <td>Row 1 Data 1</td>
	            <td>Row 1 Data 2</td> -->
	        
	    </tbody>
	</table>
</div>

<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );

	$('#deleteButton').click(function() {
		 $.ajax({
		  type: "POST",
		  url: "deleteRecords.php",
		  data: { id: "1" }
		}).done(function( msg ) {
			alert("Records deleted");
		    location.reload();
		});    

	 });
	
</script>



</body>
</html>