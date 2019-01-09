<?php  //Start the Session
	
	session_start();
 	require('connect.php');
 	require('escape.php');

?> 

<?php
if (isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Staff</title>
<!--<basefont size="12"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="http://localhost/sb/sb-css/widescreen_admin.css" media="screen and (min-width:992px)" rel="stylesheet"> <!-- 1045 -->
<link href="http://localhost/sb/sb-css/smallscreen.css" media="screen and (max-width:991px)" rel="stylesheet">

<style type="text/css">

	
	.active{
		background-color:#4CAF50;
	}
	.l{padding-top:17px;}
	

</style>

</head>
<body style="background-color:gray ; margin:20px;font-size:20px;">

<!-- muwonge -->

	
		<div class="hd" style="background-color: blue; padding:19px;">
			<h1>	
				
					<p class="left-h"><img src="http://localhost/sb/sb-images/images.png" height="120" width="200" alt="not here"></p>
					<p class="right-h"><img src="http://localhost/sb/sb-images/images.jpeg" height="120" ></p>
					<p class="cent-h" style="color:white;text-align:center;"><em><b>Sponge Bob</br> Nursery and Primary</br>School</em></b></p>
					
			</h1>
		</div>
		<!--

		<div class="d" >
			<div style="padding:20px; color:blue;">	
					<h2 class="leftST"  style="background-image:url(C:/Users/USER/Desktop/sb/sb-images/pencil1.png);">
					<marquee behavior="scroll" direction="left">You are most welcome here at Sponge Bob's website</marquee>
					</h2>

					<p class="budge"><img class="budge2" src="C:/Users/USER/Desktop/sb/sb-images/images-4.jpeg"  alt="not here"></p>
					<p class=""><img class="budge3" src="C:/Users/USER/Desktop/sb/sb-images/images-4.jpeg"  alt="not here"></p>

			</div>
		</div>

		-->
		<div class="dropdown">

			<button onclick="myFunction(this)" class="dropbtn">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</button>
			  
		</div>

		<div id="myDropdown" class="dropdown-content">
			 <a class="active" href="staff_admin.html">Staff</a>
			 <a href="creative.html">Creative Corner</a>
			 <a href="calender.html">Calender</a>
			 <a href="notification.html">Notification</a>
			 <a href="logout.php">Log Out</a>
		</div>


			<script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction(x) {
				document.getElementById("myDropdown").classList.toggle("show");
				x.classList.toggle("change");
			}

			</script>
		
		<div id="wrap">
			<ul>
			  <li><a class="active" href="staff_admin.html">Staff</a></li>
			  <li><a href="creative.html">Creative Corner</a></li>
			  <li><a href="calender.html">Calender</a></li>
			  <li><a href="notification.html">Notification</a></li>
			  <li><a href="logout.php">Log Out</a></li>
			</ul>
			
		</div>
<?php
	
	if (!isset($_GET['staff'])) {
		# code...
		//
			//$_SESSION['changingstaff'] = "Sorry, No details of staff have been deleted.";
			
			header('Location: admin.php');
			die();
		//include "C:/xampp/htdocs/sb/sb-php/admin.php";
	}

	$id = $_GET['staff']; 
	$select_staff = "SELECT * FROM staff WHERE id = ".$id;
	//$insert_staff = "INSERT INTO `staff` VALUES('$staffID','$fullname','$description','$catergory','$title','$image')";
	$staff = mysqli_query($connection, $select_staff) or die(mysqli_error($connection));
	$count = mysqli_num_rows($staff);

?>
	
	<div class="all2">	
		
		
		<div class="corner" style="background-color: blue;">
			<h2 style="background-color: green;">	
					<p class="cc" style="color:white;text-align:center;"><b>Edit Staff</b></p>
			</h2>
					<div style="color:white;text-align:;padding-left: 20px;">
							<a href="admin.php">
									<button class = "submit" style = "background-color:green;color:white;border-radius:5px;">Go Back</button>
							</a>
					</div>
					<div style="color:white;text-align:;padding-left:40px;">
						<form name="addingstaff" method="post" action="editingstaff.php" enctype="multipart/form-data"
								 style="background-color:;text-align:;padding-bottom:0px;">
						
							<?php foreach ($staff as $staff): ?>

								<p><label style="color:white;">Staff ID : <br>
									<input type="text" name="staffID" placeholder="sb001" id="StaffID" value="<?php echo e($staff['id']); ?>" />
								</label></p>
								<p><label style="color:white;">Fullname : <br>
									<input type="text" name="fullname" placeholder="Firstname Lastname" id="fullname" value="<?php echo e($staff['fullnames']); ?>" />
								</label></p>
								<p><label style="color:white;">Description : <br>
								<textarea name="description" placeholder="S/he's a good caring teacher ..." rows="10" >
									<?php echo e($staff['description']); ?> 
								</textarea>
								</label></p>
								<p><label style="color:white;">Catergory : <br>
									<select name="catergory">
									  <option value="not selected">***please select the catergory***</option>
									  <option value="Directors" <?php if ($staff['catergory'] == 'Directors') echo ' selected="selected"'; ?> >
									  	Directors
									  </option>
									  <option value="Administrators"  <?php if ($staff['catergory'] == 'Administrators') echo ' selected="selected"'; ?> >
									  	Administrators</option>
									  <option value="Teaching Staff"  <?php if ($staff['catergory'] == 'Teaching Staff') echo ' selected="selected"'; ?> >
									  	Teaching Staff</option>
									  <option value="Non-Teaching Staff" <?php if ($staff['catergory'] =='Non-Teaching Staff') echo'selected="selected"'; ?> >
									  	Non-Teaching Staff</option>
									</select>
								</label></p>
								<p><label style="color:white;">Title/Position : <br>
										<input type="text" name="title" placeholder="e.g headteacher" id="title" value="<?php echo e($staff['title']); ?>" />
								</label></p>
								<p style="text-align: center;"><label style="color:white;">Image : <br>
									<input type="file" id="files" name="image" /><br>
									<img id="image" style="width: 200px; height: 200px; background-color: white;border-radius: 10px;" src= "<?php echo e($staff['image']); ?>" />
								</label></p>

								<!-- hidden input-->
								<input type="hidden" name="id" value="<?php echo e($staff['id']); ?>" />
								<p style="text-align: center;">
									<input class="submit" type="submit" name="submit" value="Edit">
								</p>
							
							<?php endforeach; ?>
						
						</form>
									<!-- javascript that automatically displays the chosen image -->								
									<script type="text/javascript">
										document.getElementById("files").onchange = function () {
									    var reader = new FileReader();

									    reader.onload = function (e) {
									        // get loaded data and render thumbnail.
									        document.getElementById("image").src = e.target.result;
									    };

									    // read the image file as a data URL.
									    reader.readAsDataURL(this.files[0]);
									};
									</script>
					</div>

					<div style="color:white;text-align:right;padding:20px;">
							<a>
							<?php echo( "<button class = \"submit\" onclick= \"location.href='admin.php'\" style = \"background-color:green;color:white;border-radius:5px;\">Go Back</button>");
							?>
							
						</a>
					</div>
		
		</div>

	</div>	
		<div class="f" style="background-color:;">
				
				
					<div class="left-f" style="color:blue;text-align:center; padding:20px;">
						Spongebob Nursery  and primary School, Kanyanya along Gayaza road </br>500 meters from Gaz Petrol Station</br>
						Tell: <a style="color:blue;" href="tel:+256772315091">+256-772-315-091</a>/<a style="color:blue;" href="tel:+256704315091">+256-704-315-091</a></br>
						Email: <a style="color:blue;" href="mailto:spongebobjuniorschool@gmail.com?subject=School Website">spongebobjuniorschool@gmail.com</a>
						
					</div>
					
					<div class="right-f" style="color:green;text-align:center; padding:20px;">
						All website content copyright &copy Spongebob Nursery School.</br>Created by <b><em>Muwonge Emmanuel</em></b>,</br> School website designers</br>
						And other website as well.
					</div>
					
					<div class="cent-f" style="color:#34495e;text-align:center; padding:20px;">
						<a href="sitemap.html" style="color:#34495e;">Sitemap</a></br><a href="cookie.html" style="color:#34495e;">Cookie Information</a></br>
						<a href="policy.html" style="color:#34495e;">Website Policy</a>
						
					</div>
			
		</div>
		
		
	
	

</body>
</html>

<?php 
	
	}

	else{
			//f the user session has expired
			$_SESSION['login_fail'] = "Your Session has expired, please login again.";
			//echo "Your Session has expired, please login again.";
			header('Location: login.php');
	}

?>