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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SiiSU - Dashboard</title>
	<link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
	<link href="dashboard/css/font-awesome.min.css" rel="stylesheet">
	<link href="dashboard/css/datepicker3.css" rel="stylesheet">
	<link href="dashboard/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		#logo{
			position:absolute;
		    max-width:20%;
		  	max-height:20%;
		  	top: 0%;
			left: 0%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<!--<a class="navbar-brand" href="#"><span>SiiSU</span>Admin</a>-->
				<img id="logo" src="img/siisu.png" alt="SiiSu Logo">
				<!--
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul> -->
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="displayTransactions.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li> -->
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Transactions Table
					</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
			<button id="deleteButton" type="button">Delete Records</button>
			<table id="myTable" class="table table-striped table-bordered">
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
						        	$prevBalance = 300;
						        	foreach($transactions as $row)
						        	{
						        		
						        		$netAccessed = number_format($row['amtAccessed']/$prevBalance,2) * 100;

						        		echo "<tr>";
						        		echo "<td>" . '<img style="display:block width="10%" height="10%"" src="img/' . $row['logo'] . '.png"/></td>';
						        		echo "<td>" . '<img style="display:block width="10%" height="10%"" src="img/targetLogo.jpeg"/></td>';
						        		echo "<td>U" . $row['transactionID'] . "</td>";
						        		echo "<td>" . $row['employerTaxID'] . "</td>";
						        		echo "<td>" . date_format(date_create($row['dateOfTrans']),"m/d/Y") . "</td>";
						        		echo "<td>" . $row['name'] . "</td>";
						        		echo "<td>" . $row['ssn'] . "</td>";
						        		echo "<td>" . $row['employeeID'] . "</td>";
						        		echo "<td>$" . $prevBalance . "</td>";
						        		echo "<td>$" . $row['amtAccessed'] . "</td>";
						        		echo "<td>$" . $row['remainingBalance'] . "</td>";
						        		echo "<td>" . date_format(date_create($row['currPayPerEndDate']),"m/d/Y") . "</td>";
						        		echo "<td>" . $netAccessed . "%</td>";
						        		echo "<td>" . $row['status'] . "</td>";
						        		echo "</tr>";
						        		if($row['status'] != "denied")
						        			$prevBalance = $prevBalance - $row['amtAccessed'];
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
				        </div>
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<script src="dashboard/js/jquery-1.11.1.min.js"></script>
	<script src="dashboard/js/bootstrap.min.js"></script>
	<script src="dashboard/js/chart.min.js"></script>
	<script src="dashboard/js/chart-data.js"></script>
	<script src="dashboard/js/easypiechart.js"></script>
	<script src="dashboard/js/easypiechart-data.js"></script>
	<script src="dashboard/js/bootstrap-datepicker.js"></script>
	<script src="dashboard/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
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


		
