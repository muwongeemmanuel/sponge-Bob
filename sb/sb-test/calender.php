<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php 
	
	include 'calenderfunction.php';
	//require('calenderfunction.php');
	$calendar = new Calendar();
 
	echo $calendar->show();
	
?>
</body>
</html>       