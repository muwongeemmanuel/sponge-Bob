<?php  //Start the Session
	
	session_start();
 	require('connect.php');
 	require('escape.php');

?>

<!DOCTYPE html>
<html>
<head>
<title>Our Staff</title>
<!--<basefont size="12"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="http://localhost/sb/sb-css/widescreen.css" media="screen and (min-width:992px)" rel="stylesheet"> <!-- 1045 -->
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
		<div class="d" >
			<div style="padding:20px; color:blue;">	
					<h2 class="leftST"  style="background-image:url(http://localhost/sb/sb-images/pencil1.png);">
					<marquee behavior="scroll" direction="left">You are most welcome here at Sponge Bob's website</marquee>
					</h2>

					<p class="budge"><img class="budge2" src="http://localhost/sb/sb-images/images-4.jpeg"  alt="not here"></p>
					<p class=""><img class="budge3" src="http://localhost/sb/sb-images/images-4.jpeg"  alt="not here"></p>

			</div>
		</div>
		
		<div class="dropdown">

			<button onclick="myFunction(this)" class="dropbtn">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</button>
			  
		</div>

		<div id="myDropdown" class="dropdown-content">
			 <a href="sbhome.php">Home</a>
			 <a href="nursery.php">Nursery School</a>
			 <a href="primary.php">Primary School</a>
			 <a href="admission.php">Admission</a>
			 <a class="active" href="staff.php">Our Staff</a>
			 <a href="about.php">About Us</a>
			 <a href="scontact.php">Contact</a>
			 <a href="login.php">Login</a>
		</div>


			<script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction(x) {
				document.getElementById("myDropdown").classList.toggle("show");
				x.classList.toggle("change");
			}

			// Close the dropdown if the user clicks outside of it
			/*window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn')) {

				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
				  var openDropdown = dropdowns[i];
				  if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				  }
				}
			  }
			}*/
			</script>
		
		<div id="wrap">
			<ul>
			  <li><a href="sbhome.php">Home</a></li>
			  <li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Program</a>
				<div class="dropdown-content">
				  <a href="nursery.php">Nursery School</a>
				  <a href="primary.php">Primary School</a>
				</div>
			  </li>
			  <li><a href="admission.php">Admission</a></li>
			  <li><a class="active" href="staff.php">Our Staff</a></li>
			  <li><a href="about.html">About Us</a></li>
			  <li><a href="scontact.php">Contact</a></li>
			  <li><a href="login.php">Login</a></li>
			</ul>
			
		</div>
		
	<div class="all2">	
		<div class="corner" style="background-color: indigo;">
			<h2 class="h" style="background-color: blue;">	
					<p style="color:white;text-align:center;"><b>Directors</b></p>
			</h2>

			<?php
					

					$select_staff = "SELECT * FROM staff WHERE catergory = 'Directors'";
										 
					$staff = mysqli_query($connection, $select_staff) or die(mysqli_error($connection));
					$count = mysqli_num_rows($staff);
			?>	


			<?php if ($count==0): ?>
				<p style="color:white;text-align:center;padding:20px;">
					No details of Administrator staff have been added yet.
				</p>
			<?php else: ?>
			
				<?php foreach ($staff as $director): ?>

					<p class="left-h" style=" text-align:;padding-left:20px;margin:20px;">
						<img src= "<?php echo e($director['image']); ?>" height="150" width="150" alt="not here" style = "border-radius: 10px;">
					</p>
					<p style="color:white;text-align:;padding-left:20px;margin:50px;">
						<p style="color:white;text-align:;padding-left:20px;"> <b><?php echo e($director['fullnames']); ?></b> </p>
						<p style="color:white;text-align:;left;padding-left:20px;"> <b><?php echo e($director['title']); ?></b> </p>
						<p style="color:white;text-align:;padding-left:20px;"> <?php echo e($director['description']); ?> </p>
					</p>
					
					<hr>
				<?php endforeach; ?>
			<?php endif; ?>
			
		
		</div>
		<div class="corner" style="background-color: purple; margin-top: 40px;">
			<h2 class="h" style="background-color: blue;">	
					<p style="color:white;text-align:center;"><b>Administrators</b></p>
			</h2>

			<?php
					

					$select_staff = "SELECT * FROM staff WHERE catergory = 'Administrators'";
										 
					$staff = mysqli_query($connection, $select_staff) or die(mysqli_error($connection));
					$count = mysqli_num_rows($staff);

				
			?>	
			
			<?php if ($count==0): ?>
				<p style="color:white;text-align:center;padding:20px;">
					No details of Administrator staff have been added yet.
				</p>
			<?php else: ?>

				<?php foreach ($staff as $administrator): ?>

					<p class="left-h" style=" text-align:;padding-left:20px;margin:20px;">
						<img src= "<?php echo e($administrator['image']); ?>" height="150" width="150" alt="not here" style = "border-radius: 10px;">
					</p>
					<p style="color:white;text-align:;padding-left:20px;margin:50px;">
						<p style="color:white;text-align:;padding-left:20px;"> <b><?php echo e($administrator['fullnames']); ?></b> </p>
						<p style="color:white;text-align:;left;padding-left:20px;"> <b><?php echo e($administrator['title']); ?></b> </p>
						<p style="color:white;text-align:;padding-left:20px;"> <?php echo e($administrator['description']); ?> </p>
					</p>
					
					<hr>
				<?php endforeach; ?>
				
			<?php endif; ?>

		</div>
		<div class="corner" style="background-color: green; margin-top: 40px;">
			<h2 class="h" style="background-color: blue;">	
					<p style="color:white;text-align:center;"><b>Teaching Staff</b></p>
			</h2>

			<?php
					

					$select_staff = "SELECT * FROM staff WHERE catergory = 'Teaching Staff'";
										 
					$staff = mysqli_query($connection, $select_staff) or die(mysqli_error($connection));
					$count = mysqli_num_rows($staff);

				
			?>	
			
			<?php if ($count==0): ?>
				<p style="color:white;text-align:center;padding:20px;">
					No details of Teaching Staff staff have been added yet.
				</p>
			<?php else: ?>

				<?php foreach ($staff as $teaching): ?>

					<p class="left-h" style=" text-align:;padding-left:20px;margin:20px;">
						<img src= "<?php echo e($teaching['image']); ?>" height="150" width="150" alt="not here" style = "border-radius: 10px;">
					</p>
					<p style="color:white;text-align:;padding-left:20px;margin:50px;">
						<p style="color:white;text-align:;padding-left:20px;"> <b><?php echo e($teaching['fullnames']); ?></b> </p>
						<p style="color:white;text-align:;left;padding-left:20px;"> <b><?php echo e($teaching['title']); ?></b> </p>
						<p style="color:white;text-align:;padding-left:20px;"> <?php echo e($teaching['description']); ?> </p>
					</p>
					
					<hr>
				<?php endforeach; ?>
				
			<?php endif; ?>

		</div>
		<div class="corner" style="background-color: indigo; margin-top: 40px;">
			<h2 class="h" style="background-color: blue;">	
					<p style="color:white;text-align:center;"><b>Non-Teaching Staff</b></p>
			</h2>

			<?php
					

					$select_staff = "SELECT * FROM staff WHERE catergory = 'Non-Teaching Staff'";
										 
					$staff = mysqli_query($connection, $select_staff) or die(mysqli_error($connection));
					$count = mysqli_num_rows($staff);

				
			?>	
			
			<?php if ($count==0): ?>
				<p style="color:white;text-align:center;padding:20px;">
					No details of Teaching Staff staff have been added yet.
				</p>
			<?php else: ?>

				<?php foreach ($staff as $nonteaching): ?>

					<p class="left-h" style=" text-align:;padding-left:20px;margin:20px;">
						<img src= "<?php echo e($nonteaching['image']); ?>" height="150" width="150" alt="not here" style = "border-radius: 10px;">
					</p>
					<p style="color:white;text-align:;padding-left:20px;margin:50px;">
						<p style="color:white;text-align:;padding-left:20px;"> <b><?php echo e($nonteaching['fullnames']); ?></b> </p>
						<p style="color:white;text-align:;left;padding-left:20px;"> <b><?php echo e($nonteaching['title']); ?></b> </p>
						<p style="color:white;text-align:;padding-left:20px;"> <?php echo e($nonteaching['description']); ?> </p>
					</p>
					
					<hr>
				<?php endforeach; ?>
				
			<?php endif; ?>

		</div>
		
		<div class="corner" style="background-color: blue;">
			<h2 style="background-color: green;">	
					<p class="cc" style="color:white;text-align:;"><b>Creative Corner</b></p>
			</h2>
					<p style="color:white;text-align:center;padding:20px;">
						<marquee behavior="scroll" direction="left" scrolldelay="800" scrollamount="100">
							<img src="http://localhost/sb/sb-images/images-7.jpeg" width="150" height="108" alt="Cup of tea anyone?">
							<img src="http://localhost/sb/sb-images/images.jpeg" width="150" height="108" alt="Cup of tea anyone?">
							<img src="http://localhost/sb/sb-images/images.png" width="150" height="108" alt="Cup of tea anyone?">
						</marquee>
					</p>
		
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