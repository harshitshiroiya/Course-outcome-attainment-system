<!DOCTYPE HTML>
<html>
<head>
<title>SAKEC - Employee Information Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta name="google-signin-hosted_domain" content="sakec.ac.in">
<meta name="google-signin-client_id" content="476511836945-jkdc7qaut4jk71ehb47s1chda75o544k.apps.googleusercontent.com">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
		//window.location = 'courses.php?fname='+profile.getGivenName()+'&sname='+profile.getFamilyName()+'&email='+profile.getEmail();
		window.location = 'personal_info.php?fname='+profile.getGivenName()+'&name='+profile.getFamilyName()+'&email='+profile.getEmail();
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
	  
    </script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<!-- <body class="cbp-spmenu-push"> -->
<body>
<div class="main-content">
<!-- main content start-->
		<div>
			<div class="main-page login-page ">
				<h2 class="title1"><img src="images/edm_logo.png" height="60%" width="60%"></h2>
				<div class="widget-shadow">
					<div class="login-body">
					<div id="messege"></div>
						<form action="" method="POST">
							<input type="text" class="user" id="user" name="emp_id" placeholder="Enter Your Employee ID" required="required" maxlength="4" oninput="validity.valid ||(value='');">
							<input type="password" name="password" id="pwd" class="lock" placeholder="PAN Card Number" required="required" maxlength="10" oninput="validity.valid ||(value='');">
							<div class="forgot-grid">
<!-- 								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
 -->								<!-- <div class="forgot">
									<a href="#">forgot password?</a>
								</div> -->
								<div id="messege" class="clearfix">
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eis";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['emp_id']))
{
	$username = stripslashes($_REQUEST['emp_id']);
        //escapes special characters in a string
	//$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	//$password = mysqli_real_escape_string($con,$password);
	$query = "SELECT * FROM `emp` WHERE e_no='$username' and panno='$password'";
	//echo $query;
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row["e_name"];
		$_SESSION['designation']=$row["designation"];
		$_SESSION["emp_code"]=$row["e_no"];
		$_SESSION["email"]=$row["emailid"];
		header("Location: update_table.php");
		/*else if($login==0)
			header("Location:change_password.php");*/
	}
	else
	{
	echo "<font color=red>Username/password is incorrect.</font>";
	}
}

?>
</div>
							</div>
							<input type="submit" name="Sign In" value="Sign In">
							 <div class="registration">
								OR <br/><br/>
								<center><div class="g-signin2" data-width="200" data-height="50" data-onsuccess="onSignIn"></div></center>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
	   <p>&copy; 2019 <a target="_blank" href="http://shahandanchor.com/">Shah & Anchor Kutchhi Engineering College.</a> All Rights Reserved </p>		
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
   <script>
  /* function loginUser()
   {
   var user=document.getElementById("user").value;
   var pwd=document.getElementById("pwd").value;
  
   if(user.localeCompare("altimate@altimate.ac.in")!=0 && pwd.localeCompare("abcd1234")!=0)
	{
		document.getElementById("user").value="";
		document.getElementById("pwd").value="";
		document.getElementById("messege").innerHTML="<center><font color=red><b>Invalid Login Credentials!!</b></font></center>";
		return false;
	}
   }*/
   </script>
   
</body>
</html>