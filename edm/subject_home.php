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
		<?php
		if( isset($_POST['course_id']) )
		{
			$course_id=$_POST['course_id'];
			$_SESSION['course_id']=$course_id;
		}
		else
		{
			$course_id=$_SESSION['course_id'];
		}
		?>
			<h3 class="title1">Subject Home (<?php echo $course_id; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form action="select_course.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
				<tbody>
					<?php
						include 'login_config.php';
						$term=$_SESSION['term'];
						$e_no=$_SESSION['emp_code'];
						
						

						

						 $qry="SELECT * FROM `courses` INNER JOIN `course_tchr` ON `courses`.`course_id`=`course_tchr`.`course_id` INNER JOIN `domain` ON `courses`.`domain_id`=`domain`.`domain_id` INNER JOIN `users` ON `users`.`e_no`=`domain`.`domain_ic` where `course_tchr`.`tchr_id`='$e_no' AND `courses`.`term`='$term' and `courses`.`branch_id`='$branch_code' AND `courses`.`course_id`='$course_id'";

						
						//echo $qry;
						//$qry="Select * from courses where term='$term' and `branch_id`=$branch_code";
						$result = mysqli_query($conn,$qry);
						if (mysqli_num_rows($result) > 0) 
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$course_id=$row['course_id'];
								echo "<tr><th>Course ID</th><td>".$course_id."</td></tr>";
								echo "<tr><th>Course Name</th><td>".$row['course_name']."</td></tr>";
								echo "<tr><th>Course Type</th><td>".$row['course_type']."</td></tr>";
								echo "<tr><th>Domain Number</th><td>".substr($row['domain_id'],-1)."</td></tr>";
								echo "<tr><th>Domain Name</th><td>".$row['domain_name']."</td></tr>";
								echo "<tr><th>Domain I/c</th><td>".$row['e_name']."</td></tr>";
								echo "<tr><th>Semester</th><td>".$row['sem']."</td></tr>";
								echo "<tr><th>Term</th><td>".$term."</td></tr>";
							}
							
						}
						?>
					</tbody>
				</table>
				<!--<center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Go to course Home.</button></center><br><br>-->
				</form>
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