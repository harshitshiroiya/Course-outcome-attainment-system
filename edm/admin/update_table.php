<?php
session_start();
require_once("db_connect.php");
$name=$_SESSION['name'];
$designation=$_SESSION['designation'];
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>SAKEC - Employee Information Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" type="text/css" href="DataTables/Bootstrap-3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="DataTables/Buttons-1.6.0/css/buttons.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/Buttons-1.6.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/Buttons-1.6.0/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/Buttons-1.6.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="DataTables/Buttons-1.6.0/js/buttons.print.min.js"></script>

<!-- Bootstrap Core CSS 
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js
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
input:valid {
  border:1px solid green;
}
input:invalid {
  border:1px solid red;
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
<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control1" placeholder="Search '+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#example').DataTable( {
		"paging":   false,
		dom: '<"top"i>,Bfrtip',
        orderCellsTop: true,
        fixedHeader: true,
		"columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],
		
    } );
	table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="personal_info.php"><img width="100%" src="images/edm_logo.png"></a><br/><br/>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="treeview">
                <a href="update_table.php">
                <i class="fa fa-edit"></i> <span>Update Employee Info.</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="data_table.php">
                <i class="fa fa-graduation-cap"></i> <span>Search Employee</span>
                </a>
              </li>
			  <!--<li class="treeview">
                <a href="appointment_details.php">
                <i class="fa fa-file-pdf-o"></i> <span>Appointment Detals</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="cas_details.php">
                <i class="fa fa-line-chart"></i> <span>CAS Details</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="training_details.php">
                <i class="fa fa-plus-square"></i> <span>STTP/FDP/Workshop Details</span>
                </a>
              </li>-->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p><?php echo $name; ?></p>
										<span><?php echo $designation; ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="row">
			<h3 class="title1">Update Faculty Details :</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form action="search_info.php" class="form-horizontal" method="POST">
				<?php 
								if(isset($_GET['message']))
								{
									$message=$_GET["message"];
									echo "<div class=\"alert alert-danger\">";
									echo "<strong>";
									echo $message;
									echo "</strong>";
									echo "</div>";
								}
								?>
				<div class="form-group">
				<label class="col-md-2 control-label">Employee ID</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-barcode"></i>
							</span>
							<input type="text" name="e_id" class="form-control1" required="required">
						</div>
					</div>
				</div>
				<center>
				<button type="reset" class="btn btn-default">Clear All Fields</button>
				<button type="submit" class="btn btn-warning">Search</button>
	</center>
	</form>
		</div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p>&copy; 2019 <a target="_blank" href="http://shahandanchor.com/">Shah & Anchor Kutchhi Engineering College.</a> All Rights Reserved </p>		
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
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>