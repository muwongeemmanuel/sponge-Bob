<?php  //Start the Session
	
	session_start();
 	require('connect.php');
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
<body style="background-color:gray;margin:20px;font-size:20px;" id="body" <?php if (isset($_SESSION['login_fail'])){ ?>onload ="mybody()" >

<script>
function mybody() {
	window.alert("<?php echo $_SESSION['login_fail']; ?>")
}
</script>

<?php unset($_SESSION['login_fail']); // remove it now we have used it ?>
<?php } ?>


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
			 <a class="active" href="sbhome.html">Home</a>
			 <a href="nursery.html">Nursery School</a>
			 <a href="primary.html">Primary School</a>
			 <a href="admission.html">Admission</a>
			 <a href="staff.html">Our Staff</a>
			 <a href="about.html">About Us</a>
			 <a href="scontact.html">Contact</a>
			 <a href="login.html">Login</a>
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
			  <li><a class="active" href="sbhome.html">Home</a></li>
			  <li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Program</a>
				<div class="dropdown-content">
				  <a href="nursery.html">Nursery School</a>
				  <a href="primary.html">Primary School</a>
				</div>
			  </li>
			  <li><a href="admission.html">Admission</a></li>
			  <li><a href="staff.html">Our Staff</a></li>
			  <li><a href="about.html">About Us</a></li>
			  <li><a href="scontact.html">Contact</a></li>
			  <li><a href="login.html">Login</a></li>
			</ul>
			
		</div>
		
	<div class="all2">	
		<div class="login" style="background-color: indigo;">
			<h2 class="h" style="background-color: blue;">	
					<p style="color:white;text-align:center;"><b>Login</b></p>
			</h2>
			<div style="background-color: ;text-align:center;">
					<form name="form1" method="post" action="check.php" style="background-color:;text-align:;padding-bottom:50px;">
						
						<p><label style="color:white;">Username : <input type="text" placeholder="Username" name="username" id="uname"/></label></p>
						<p><label style="color:white;">Password : <input type="password" placeholder="Password" name="password" id="pword"/></label></p>
						<p>
							<input class="submit" type="submit" name="submit"value="Log in"  style="background-color:blue;color:white;border-radius:5px;">
						</p>
						<p><a href="forgot.html" style="color:red;">Forgot your password ?</a></p>
						
					</form>
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