<?php  //Start the Session
	
	session_start();
 	require('connect.php');
?>
<form action="store.php" method="post" id="form" enctype="multipart/form-data">
     Upload image : 
     <input type="file" name="uploadFile" value="" />
     <input type="submit" name="submitBtn" value="Upload" />
</form>