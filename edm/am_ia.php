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
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
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
			<h3 class="title1">List of Course Outcome (CO) (<?php echo $_SESSION['course_id']; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form id="co_form" action="co_statmnt_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<div class="table-responsive bs-example widget-shadow" data-example-id="contextual-table">
				<table class="table table-bordered">
				<thead>
				<tr>
				<th>Internal Assesment No.</th><th>Internal Assesment Question</th><th>Marks<br>Alloted<br>to<br>each<br>Question</th><th>Blooms<br>Taxonomy<br>Level<br>of<br>Question</th><th>CO</th><th>PSOs</th><th>PSOs</th><th>Performance Indicator (PI) of PO </th>
				</tr>
				</thead>
				<?php
				include 'login_config.php';
				//session_start();
				$branch_code=$_SESSION['branch_code'];
				$course_id=$_SESSION['course_id'];
				$term=$_SESSION['term'];
				$dept=$_SESSION["dept"];
				$pso=array();
				$class=array();
				$co_qry="SELECT * FROM `co_list` WHERE `co_id` LIKE '$course_id%'";
				$pso_qry="SELECT * FROM `pso` WHERE `branch_id`=$branch_code";
				//echo $pso_qry;
				
				$co_result = mysqli_query($conn,$co_qry);
				$pso_result = mysqli_query($conn,$pso_qry);
				
				if (mysqli_num_rows($pso_result) > 0) 
				{
					while($pso_row = mysqli_fetch_assoc($pso_result))
					{
						$pso[]=$pso_row;
					}
				}
				
				$co_no=mysqli_num_rows($co_result);
				if($co_no==6)
				{
					$co_no=0;
				}
				else
				{
					$co_no+=1;
				}
				//echo $co_no;
				?>
				<tbody id="co_list">
				<tr>
				<td><input type="hidden" name="trans_id" value=""><div class='form-group'><div class="col-md-12"><div class="input-group"><input type="text" name="co_no" class="form-control1" value="<?php echo 'CO'.$co_no;?>" readonly></div></div></div></td>
				<td><div class='form-group'><div class="col-md-10"><div class="input-group"><input type="text" name="co_id" class="form-control1" value="<?php echo $course_id.'.'.$co_no;?>" readonly></div></div></div></td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="co_stmt" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
				<td><div class='form-group'><div class='col-md-8'><select name='bl' class='form-control1' required='required'><option value=''>Select</option><option value='1'>BL1</option><option value='2'>BL2</option><option value='3'>BL3</option><option value='4'>BL4</option><option value='5'>BL5</option><option value='6'>BL6</option></td>
				<td><div class='form-group'><div class="col-md-10"><div class="input-group"><input type="number" name="weightage" class="form-control1" min="0.01" max="100" step="0.01" required='required'></div></div></div></td>
				<td><div class='form-group'><div class="col-md-10"><div class="input-group"><input type="number" name="syll_module" class="form-control1" min="1" max="20" step="1" required='required'></div></div></div></td>
				<td>
				<div class="form-group1 col-md-12 col-lg-12 col-sm-12">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
				</tr></tbody></table>
				<center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Save</button></center>
				</form>
				</div>
				</form>
				<?php
				if(!empty($_GET['message']))
					echo $_GET['message'];
				?>
				</div>
				</div>
				<!------------- Display Table--------------->
				<div class="form-three widget-shadow">
				<h3><b>List of Course Outcome (CO):</b></h3><br>
				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
				<thead>
				<tr>
				<th>CO No.</th><th>Unique CO No.</th><th>CO Statement</th><th>Blooms Taxonomy Level</th><th>% weightage</th><th>Mapping to<br>Syllabus<br>Modules</th><th>PSOs</th><th>Performance Indicator (PI) of PO</th><th></th>
				</tr>
				</thead>
				<tbody id="co_list1">
				<?php
				if (mysqli_num_rows($co_result) > 0) 
				{
					while($co_row = mysqli_fetch_assoc($co_result))
					{
						echo "<tr>";
						echo "<td>".$co_row['co_no']."</td>";
						echo "<td>".$co_row['co_id']."</td>";
						echo "<td>".$co_row['co_stmt']."</td>";
						echo "<td>".$co_row['bl_level']."</td>";
						echo "<td>".$co_row['weightage']."</td>";
						echo "<td>".$co_row['syll_module']."</td>";
						echo "<td>".$co_row['pso']."</td>";
						echo "<td>".$co_row['pi_po']."</td>";
						echo "<td><button class=\"btn btn-success\" onclick=\"editCO('".$co_row['trans_id']."')\"><i class=\"fa fa-pencil-square-o\"></i></button></td>";
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
			
			function editCO(trans_id)
			{
				document.getElementById("co_form").action = "update_co_list.php";
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("co_list").innerHTML = this.responseText;
						$('#pso_select').selectpicker('refresh');
					}
				};
				xmlhttp.open("GET", "get_co.php?trans_id=" + trans_id, true);
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