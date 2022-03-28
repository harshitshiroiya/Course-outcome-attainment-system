<!DOCTYPE HTML>
<html>
<head>
<title>SAKEC - Course Outcome Assessment System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

	<!-- requried-jsfiles-for owl -->
					<link href="css/owl.carousel.css" rel="stylesheet">
					<script src="js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<body id="mainclass" class="cbp-spmenu-push-toright">
	<div class="main-content">
	
		<!--left-fixed -navigation-->
		<?php
		include "user_sidebar.php";
		?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="row">
			<h3 class="title1">Faculty Information (<?php echo $_SESSION['course_id']; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form action="select_course.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<input type="button" class="btn btn-default" style="background-color: #4CAF50;color:#FFFFFF;" value="Add Faculty+" onclick="addFaculty();">
				<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
				<table id="phy_details" class="table table-hover">
				<thead>
				<tr>
				<th>Faculty Name</th><th>Class</th><th>Faculty Email</th><th>Faculty Mobile Number</th><th>Faculty Extension no.</th><th></th>
				</tr>
				</thead>
				<?php
				include 'login_config.php';
				//session_start();
				$branch_code=$_SESSION['branch_code'];
				$term=$_SESSION['term'];
				$dept=$_SESSION["dept"];
				$faculty=array();
				$faculty_qry="Select `e_no`,`e_name` from `users` where dept='$dept' and `etype`='teaching'";

				$faculty_result = mysqli_query($conn,$faculty_qry);
				if (mysqli_num_rows($faculty_result) > 0) 
				{
					while($faculty_row = mysqli_fetch_assoc($faculty_result))
					{
						$faculty[]=$faculty_row;
					}
				}
				?>
				<tbody>
				<tr>
				
				<?php
					echo "<td><div class='form-group'><div class='col-sm-8'><select name='course_tchr[]' class='form-control1' required='required'><option value=''>Select</option>";
					for ($a = 0; $a < sizeof($faculty); $a++)
					{
						echo "<option value='".$faculty[$a]['e_no']."'>".$faculty[$a]['e_name']."</option>";
					}
					echo "</select></div></div></td>";
				?>
				<td></td><td></td><td></td><td></td><td></td></tr></tbody></table>
				<!--<center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Go to course Home.</button></center><br><br>-->
				</form>
				</div>
				</div>
				</div>
		</div>
		</div>
		<!--</div>-->
	<!--footer-->
	<div class="footer">
	   <p>&copy; 2020 <a target="_blank" href="http://shahandanchor.com/">Shah & Anchor Kutchhi Engineering College.</a> All Rights Reserved </p>		
	</div>
    <!--//footer-->
	</div>
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				if(document.getElementById("mainclass").className == "cbp-spmenu-push-toright")
					document.getElementById("mainclass").className = "cbp-spmenu-push";
				else if(document.getElementById("mainclass").className == "cbp-spmenu-push")
					document.getElementById("mainclass").className = "cbp-spmenu-push-toright";
				//classie.toggle(body, 'cbp-spmenu-push' );
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
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>