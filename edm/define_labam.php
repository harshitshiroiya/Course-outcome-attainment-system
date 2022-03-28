<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
 <script type="text/javascript">
 

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
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
		include "lab_course_pages_sidebar.php";
		?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="row">
		<?php $course_id=$_SESSION['course_id']; ?>
			<h3 class="title1">Select Assessment Menthods (<?php echo $course_id; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form onsubmit="return show_alert()" action="labam_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<table id="course_ic" class="table table-striped table-bordered nowrap" style="width:100%">
				<thead>
					<tr>
						<th>Assessemt Method Number</th>
						<th>Assessment Method Name</th>
						<th>Select</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>
					<?php
						include 'login_config.php';
						$qry="SELECT * FROM `lab_am` where `course_id`='$course_id'";
						$result = mysqli_query($conn,$qry);
						$row = mysqli_fetch_assoc($result);
						
					?>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM1' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am1' class='form-control1' value='Internal Assessment' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' value='am1'<?php echo ($row['am1']=="Internal Assessment" ? 'checked disabled' : '');?>></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM2' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am2' class='form-control1' value='Assignment' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' value='am2'<?php echo ($row['am2']=="Assignment" ? 'checked disabled' : '');?> ></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM3' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am3' class='form-control1' value='Tutorials' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' value='am3'<?php echo ($row['am3']=="Tutorials" ? 'checked disabled' : '');?>></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM4' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am4' class='form-control1' value='Quiz' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' value='am4'<?php echo ($row['am4']=="Quiz" ? 'checked disabled' : '');?>></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM5' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am5' class='form-control1' value='Seminar' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' value='am5'<?php echo ($row['am5']=="Seminar" ? 'checked disabled' : '');?>></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM6' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am6' class='form-control1' value='Case Study' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' value='am6'<?php echo ($row['am6']=="Case Study" ? 'checked disabled' : '');?>></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM7' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am7' id='textam7' class='form-control1' <?php echo ($row['am7']!="" ? 'value="'.$row["am7"].'" readonly': '');?> placeholder="Other"></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' id='am7' value='am7' <?php echo ($row['am7']!="" ? 'checked disabled' : '');?> onchange='removeRequired(this.id)'></div></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM8' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am8' id='textam8' class='form-control1' <?php echo ($row['am8']!="" ? 'value="'.$row["am8"].'" readonly': '');?> placeholder="Other"></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' id='am8' value='am8' <?php echo ($row['am8']!="" ? 'checked disabled' : '');?> onchange='removeRequired(this.id)'></div>
					</td>
					</tr>
					<tr>
					<td>
					<div class='form-group'><div class='col-md-8'><div class='input-group'><input type='text' name='amno[]' class='form-control1' value='AM9' readonly='readonly'></div></div></div>
					</td>
					<td>
					<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='am9' id='textam9' class='form-control1' <?php echo ($row['am9']!="" ? 'value="'.$row["am9"].'" readonly': '');?> placeholder="Other"></div></div></div>
					</td>
					<td>
					<div class='checkbox-inline1'><input type='checkbox' name='am[]' id='am9' value='am9' <?php echo ($row['am9']!="" ? 'checked disabled' : '');?> onchange='removeRequired(this.id)'></div>
					</td>
					</tr>
				</tbody>
				</table>
				<?php if(mysqli_num_rows($result)==0)
				{?>
				<center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Save</button></center><br><br><?php } ?>
				</form>
				<?php
				if(!empty($_GET['message']))
					echo $_GET['message'];
				?>
				</div>
				</div>
				</div>
		
		</div>
	<!--footer-->
	<div class="footer">
	   <p>&copy; <?php echo date("Y"); ?> <a target="_blank" href="http://shahandanchor.com/">Shah & Anchor Kutchhi Engineering College.</a> All Rights Reserved </p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="js/Chart.bundle.js"></script>
    <script src="js/utils.js"></script>
	
	
	<!-- new added graphs chart js-->
	
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
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
    <script>
$(document).ready(function() {
    var table = $('#course_ic').DataTable( {
        responsive: true,
		paging:   false,
		info:     false,
		searching: false,
		sorting : false
		
    } );
 
    //new $.fn.dataTable.FixedHeader( table );
} );

function getCourses(sem)
{
	//alert(sem);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("course_ic_body").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET", "get_courses.php?sem=" + sem, true);
	xmlhttp.send();
}

function removeRequired(checkbox)
{
	if(document.getElementById("text"+checkbox).required==true)
		document.getElementById("text"+checkbox).required=false;
	else if(document.getElementById("text"+checkbox).required==false)
		document.getElementById("text"+checkbox).required=true;
}

function show_alert()
{
	if(!confirm("Do you really want to submit these assessment methods? Once you submit, you won't be able to edit it later.")) {
    return false;
  }
  this.form.submit();
}
    </script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>
   <link src="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css" rel="stylesheet">
   <link src="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
   <link src="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css" rel="stylesheet">
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>