<?php  //Start the Session
	
	session_start();
 	require('connect.php');
	
	//$_SESSION['username'] = $username;
	//checking if the session is still valid.
	if (isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
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
			 <a class="active" href="admin.php">Staff</a>
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
			  <li><a class="active" href="admin.php">Staff</a></li>
			  <li><a href="creative.html">Creative Corner</a></li>
			  <li><a href="calender.html">Calender</a></li>
			  <li><a href="notification.html">Notification</a></li>
			  <li><a href="logout.php">Log Out</a></li>
			</ul>
			
		</div>
		
	<div class="all2">	
		
		
		<div class="corner" style="background-color: blue;">
			<h2 style="background-color: green;">	
					<p class="cc" style="color:white;text-align:center;"><b>Manage Staff</b></p>
			</h2>
					<p style="color:white;text-align:center;">
						<a>
							<?php echo( "<button class = \"submit\" onclick= \"location.href='addstaff.php'\" style = \"background-color:green;color:white;border-radius:5px;\">Add Staff</button>");
							?>
							
						</a>
					</p>

					<?php
								//3.1.2 Checking the values are existing in the database or not
							$select_staff = "SELECT * FROM `staff`";
							 
							$result = mysqli_query($connection, $select_staff) or die(mysqli_error($connection));
							$count = mysqli_num_rows($result);
					?>	
							
					<?php if ($count == 0): ?>
						<p style="color:white;text-align:center;padding:20px;">
							Sorry, No details of staff have been added yet.
						</p>
					<?php else: ?>
						
						<p style="color:white;text-align:;padding:px;">
							
							<?php foreach ($result as $staff): ?>

							<p class="left-h" style=" text-align:;padding-left:20px;margin:20px;">
								<img src= "<?php echo $staff['image']; ?>" height="150" width="150" alt="not here" style = "border-radius: 10px;">
							</p>
							<p style="color:white;text-align:;padding-left:20px;margin:40px;">

								<p style="color:white;">Fullnames: <?php echo $staff['fullnames']; ?></p>
								<p style="color:white;">Catergory: <?php echo $staff['catergory']; ?></p>
								<p style="color:white;">Position: <?php echo $staff['title']; ?></p>
								<p style="color:white;">Description: <?php echo $staff['description']; ?></p>
							</p>
							<p style="color:white;text-align:center;">
								<a>
									<?php echo( "<button class = \"submit\" onclick= \"location.href='addstaff.php'\" style = \"background-color:green;color:white;border-radius:5px;\">Delete</button>");
									?>
									
								</a>
								<a>
									<?php echo( "<button class = \"submit\" onclick= \"location.href='addstaff.php'\" style = \"background-color:green;color:white;border-radius:5px;\">Edit</button>");
									?>
									
								</a>
							</p>
							<hr>

							<?php endforeach; ?>

						</p>
					<?php endif; ?>		
					
		
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