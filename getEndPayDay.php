<?php
date_default_timezone_set('America/Los_Angeles');
date('Y-m-d', strtotime("01/01/2001"));
$startDate = date('m/d/Y', strtotime("01/01/2019"));
$endDate = date('m/d/Y', strtotime("01/01/2019 + 10 days"));

$todaysDate = date("m/d/Y", strtotime(date("m/d/Y")));

// echo $startDate;
// echo "<br>";
// echo $todaysDate;
// echo "<br>";
// echo "<br>";
// echo date('m/d/y', strtotime($todaysDate. ' + 10 days'));

while ($todaysDate > $endDate ) 
{
	$startDate = date('m/d/Y', strtotime($startDate . " + 10 days"));
	$endDate = date('m/d/Y', strtotime($endDate . " + 10 days"));
}

// echo $startDate;
// echo "<br>";
echo $endDate;
?>