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

input:invalid {
  border: 1px solid red;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
					<!-- //requried-jsfiles-for owl -->
</head> 
<body id="mainclass" class="cbp-spmenu-push-toright">
	<div class="main-content">
	
		<!--left-fixed -navigation-->
		<?php
		include "theory_course_pages_sidebar.php";
		?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="row">
			<h3 class="title1">Faculty Information: Class and Batch wise Practicals (<?php echo $_SESSION['course_id']; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form action="faculty_info_lab_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
				<thead>
				<tr>
				<th>Faculty Name</th><th>Class</th><th>Batch</th><th>Roll no. from</th><th>Roll no. to</th>
				</tr>
				</thead>
				<?php
				include 'login_config.php';
				//session_start();
				$branch_code=$_SESSION['branch_code'];
				$term=$_SESSION['term'];
				$dept=$_SESSION["dept"];
				$courseid=$_SESSION['course_id'];
				$faculty=array();
				$class=array();
				//$faculty_qry="Select `e_no`,`e_name` from `users` where dept='$dept' and `etype`='teaching' ";
				$faculty_qry="SELECT `users`.e_no,`users`.e_name FROM `users` INNER JOIN `course_tchr` ON `course_tchr`.tchr_id=`users`.e_no AND `course_tchr`.course_id='$courseid'";
				
				$class_qry="SELECT `class_code` FROM `classes` where branch_id=$branch_code and sem=(SELECT `sem` from `courses` where `course_id`='".$_SESSION['course_id']."')";
			
				$faculty_result = mysqli_query($conn,$faculty_qry);
				
				$class_result = mysqli_query($conn,$class_qry);

				if (mysqli_num_rows($faculty_result) > 0) 
				{
					while($faculty_row = mysqli_fetch_assoc($faculty_result))
					{
						$faculty[]=$faculty_row;
					}
				}
				if (mysqli_num_rows($class_result) > 0) 
				{
					while($class_row = mysqli_fetch_assoc($class_result))
					{
						$class[]=$class_row;
					}
				}
				?>
				<tbody>
				<tr>
				
				<?php
					echo "<td><div class='form-group'><div class='col-md-8'><select name='course_tchr' class='form-control1' required='required'><option value=''>Select</option>";
					for ($a = 0; $a < sizeof($faculty); $a++)
					{
						echo "<option value='".$faculty[$a]['e_no']."'>".$faculty[$a]['e_name']."</option>";
					}
					echo "</select></div></div></td>";
					echo "<td><div class='form-group'><div class='col-md-8'><select name='course_class' class='form-control1' required='required'><option value=''>Select</option>";
					for ($a = 0; $a < sizeof($class); $a++)
					{
						echo "<option value='".$class[$a]['class_code']."'>".$class[$a]['class_code']."</option>";
					}
					echo "</select></div></div></td>";
				?>
				<td><div class='form-group'><div class="col-md-8"><div class="input-group">
					<!-- <input type="text" name="batch" list="batch" class="form-control1" placeholder="Batch" required> -->
   					 <select id="batch" name="batch">
      						<option value="A">A</option>
      						<option value="B">B</option>
      						<option value="C">C</option>
      						<option value="D">D</option>	
    				 </select></div></div></div></td>
    				 
				<td><div class='form-group'><div class="col-md-8"><div class="input-group"><input type="number" name="roll_no_from" class="form-control1" placeholder="Roll No. From" required></div></div></div></td>
				<td><div class='form-group'><div class="col-md-8"><div class="input-group"><input type="number" name="roll_no_to" class="form-control1" placeholder="Roll No. To" required></div></div></div></td>
				</tr></tbody></table>
				<center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Save</button></center>
				</form>
				<?php
				if(!empty($_GET['message']))
					echo $_GET['message'];
				?>
				</div>
				</div>
				<!------------- Display Table--------------->
				<div class="form-three widget-shadow">
				<h3>Faculty Information: Class and Batch wise Practicals:</h3><br>
				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
				<thead>
				<tr>
				<th>Faculty Name</th><th>Class</th><th>Batch</th><th>Roll no. from</th><th>Roll no. to</th>
				</tr>
				</thead>
				<tbody id="course_tchr">
				<?php
				$course_id=$_SESSION['course_id'];
				$course_qry="SELECT * FROM `faculty_info_lab` INNER JOIN `users` ON `users`.`e_no`=`faculty_info_lab`.`tchr_id` where `course_id`='$course_id' AND `term`='$term'";
				$course_result = mysqli_query($conn,$course_qry);
				if (mysqli_num_rows($course_result) > 0) 
				{
					while($course_row = mysqli_fetch_assoc($course_result))
					{
						echo "<tr>";
						echo "<td>".$course_row['e_name']."</td>";
						echo "<td>".$course_row['class_code']."</td>";
						echo "<td>".$course_row['batch']."</td>";
						echo "<td>".$course_row['roll_no_from']."</td>";
						echo "<td>".$course_row['roll_no_to']."</td>";
						echo "<td><button class=\"btn btn-danger\" onclick=\"deleteCourseTchr('".$course_row['trans_id']."')\"><i class=\"fa fa-trash\"></i></button></td>";
						echo "</tr>";
					}
				}
				?>
				</tbody></table>
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
			
			function deleteCourseTchr(trans_id)
			{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("course_tchr").innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "delete_faculty_info_lab.php?trans_id=" + trans_id, true);
				xmlhttp.send();
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