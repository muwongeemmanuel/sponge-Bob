<?php  //Start the Session
	
	session_start();
 	require('connect.php');
?>
	<?php
	
	  	$query = "select `content` from `test_image`";
	  	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	  	$count = mysqli_num_rows($result);
	  	if($count == 1) {
		    $row = mysqli_fetch_object($result);
		    echo "<br><br>";
		    echo '<img src="'.$row->content.'" width="250">';
		  }
		  else{
		  	 echo "Status : Failed to retrieve!";
		  }
	
?>