<?php  //Start the Session
	
	session_start();
 	require('connect.php');
 	if(isset($_POST['submitBtn']) && !empty($_POST['submitBtn'])) {
    if(isset($_FILES['uploadFile']['name']) && !empty($_FILES['uploadFile']['name'])) {
        //Allowed file type
        $allowed_extensions = array("jpg","jpeg","png","gif");
    
        //File extension
        $ext = strtolower(pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION));
    
        //Check extension
        if(in_array($ext, $allowed_extensions)) {
           //Convert image to base64
           $encoded_image = base64_encode(file_get_contents($_FILES['uploadFile']['tmp_name']));
           $encoded_image = 'data:image/' . $ext . ';base64,' . $encoded_image;
           $query = "insert into `test_image` set `content` = '".$encoded_image."'";
           mysqli_query($connection, $query);

           /****************************************************
           		$insert_image = "INSERT INTO `test_image` VALUES('TEST','$encoded_image')";

				$result = mysqli_query($connection, $insert_image);
				if ($result == true){

					//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
						$_SESSION['addingstaff'] = "Details Successfully added";
						//echo "Invalid Login Credentials.";
						header('Location: addstaff.php');
					//include "C:/xampp/htdocs/sb/sb-php/admin.php";
					 
				}
				else{
						//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
						$_SESSION['addingstaff'] = "Sorry, Details not Successfully added. Please try again using appriopriate words where necessary.";
						//echo "Invalid Login Credentials.";
						header('Location: addstaff.php');
				}
           ****************************************************/
           echo "File name : " . $_FILES['uploadFile']['name'];
           echo "<br>";
           if(mysqli_affected_rows($connection) > 0) {
              echo "Status : Uploaded";
              $last_insert_id = mysqli_insert_id($connection); 
           } else {
              echo "Status : Failed to upload!";
           }
       } else {
           echo "File not allowed";
       }
  }
}
?>
