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
input:valid {
  border:1px solid green;
}
input:invalid {
  border:1px solid red;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">
function checkDate()
{
	  var dateFirst = document.getElementById("from_date").value;
	  document.getElementById("to_date").min= dateFirst;
 }
 
 
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
            <a class="navbar-brand" href="index.php"><img width="100%" src="images/edm_logo.png"></a><br/><br/>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="treeview">
                <a href="personal_info.php">
                <i class="fa fa-edit"></i> <span>Personal Informaton</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="qual_details.php">
                <i class="fa fa-graduation-cap"></i> <span>Qualification Detals</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="appointment_details.php">
                <i class="fa fa-file-pdf-o"></i> <span>Appointment Details</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="cas_details.html">
                <i class="fa fa-line-chart"></i> <span>CAS Details</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="training_details.php">
                <i class="fa fa-plus-square"></i> <span>STTP/FDP/Workshop Details</span>
                </a>
              </li>
			  <!--<li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Components</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="grids.php"><i class="fa fa-angle-right"></i> Grids</a></li>
                  <li><a href="media.php"><i class="fa fa-angle-right"></i> Media Css</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="charts.php">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <span class="label label-primary pull-right">new</span>
                </a>
              </li>
              <li class="treeview">
              <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="general.php"><i class="fa fa-angle-right"></i> General</a></li>
                  <li><a href="icons.php"><i class="fa fa-angle-right"></i> Icons</a></li>
                  <li><a href="buttons.php"><i class="fa fa-angle-right"></i> Buttons</a></li>
                  <li><a href="typography.php"><i class="fa fa-angle-right"></i> Typography</a></li>
                </ul>
              </li>
			  <li>
                <a href="widgets.php">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <small class="label pull-right label-info">08</small>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="forms.php"><i class="fa fa-angle-right"></i> General Forms</a></li>
                  <li><a href="validation.php"><i class="fa fa-angle-right"></i> Form Validations</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="tables.php"><i class="fa fa-angle-right"></i> Simple tables</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox </span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.php"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
                  <li><a href="compose.php"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="login.php"><i class="fa fa-angle-right"></i> Login</a></li>
                  <li><a href="signup.php"><i class="fa fa-angle-right"></i> Register</a></li>
                  <li><a href="404.php"><i class="fa fa-angle-right"></i> 404 Error</a></li>
                  <li><a href="500.php"><i class="fa fa-angle-right"></i> 500 Error</a></li>
                  <li><a href="blank-page.php"><i class="fa fa-angle-right"></i> Blank Page</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-angle-right text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end
				<div class="profile_details_left"><!--notifications of menu start
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/4.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img src="images/1.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img src="images/3.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								<li><a href="#">
								   <div class="user_img"><img src="images/2.jpg" alt=""></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
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
			<h3 class="title1">Details of STTP/FDP/Workshop Attended:</h3>
				<div class="form-three widget-shadow">
				<!--<div class=" panel-body-inputin">
				<form action="training_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<?php 
								/*if(isset($_GET['message']))
								{
									$message=$_GET["message"];
									echo "<div class=\"alert alert-danger\">";
									echo "<strong>";
									echo $message;
									echo "</strong>";
									echo "</div>";
								}*/
								?>
				<div class="form-group">
					<label class="col-md-2 control-label">Course Type</label>
					<div class="col-md-8">
						<select name='course_type' id='selector1' class='form-control1' required='required'><option value=''>SELECT</option><option value='QIP'>QIP</option><option value='STTP'>STTP</option><option value='FDP'>FDP</option><option value='Workshop'>Workshop</option><option value='Orientation Program'>Orientation Program</option></select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Title of Program</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-id-card"></i>
							</span>
							<input type='text' name='course_title' class='form-control1' required='required'>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Duration</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-calendar-check-o"></i>
							</span>
							<input type='text' name='duration' class='form-control1' required='required' placeholder='No. of Days'>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" >From Date</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
							<input type='date' id='from_date' name='from_date' class='form-control1' required='required' onchange='checkDate()'>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label" >To Date</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
							<input type='date'  id='to_date' name='to_date' class='form-control1' required='required' >
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Certificate</label>
					<div class="col-md-8">
						<div class="input-group">							
							<input type='file' name='certi_file' class='form-control1' accept="application/pdf" required='required'>
						</div>
					</div>
				</div>
				<center>
					<button type="reset" class="btn btn-default">Clear All Fields</button>
					<button type="submit" class="btn btn-warning">Save</button>
				</center>
				</div>-->
				<div class=" panel-body-inputin">
				<form class="form-horizontal">
				<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
				<table id="appointment_details" class="table table-hover">
				<thead>
				<tr>
				<th>Course Type</th><th id="start_date">Course Title</th><th>Duration</th><th>From Date</th><th>To Date</th><th>Certificate</th>
				</tr>
				</thead>
				<tbody id="app_table">
				<?php
				$qry="SELECT * FROM `training_info` WHERE e_no='$emp_code' or emailid='$email'";
				$result = mysqli_query($conn,$qry);
				if(mysqli_num_rows($result)>0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<tr><td>".$row['course_type']."</td><td>".$row['title']."</td><td>".$row['duration']."</td><td>".date("d/m/Y", strtotime($row['from_date']))."</td><td>".date("d/m/Y", strtotime($row['to_date']))."</td><td><a target='_blank' href=".$row['certificate_url'].">View</a></td></tr>";
					}
				}
				?>
				</tbody>
				</table>
				</form>
				</div>
				</div>
				</div>
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
	
	<script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
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
    <script>
        
function salaryCheck(type)
{
	if(type=='regular')
	{
		document.getElementById('salary').style.display = 'block';
		document.getElementById('cons').style.display = 'none';
	}
	if(type=='adhoc')
	{
		document.getElementById('salary').style.display = 'none';
		document.getElementById('cons').style.display = 'block';
	}
}
function addField (argument) {
        var myTable = document.getElementById("appointment_details");
        var currentIndex = myTable.rows.length;							
		var table = document.getElementById("appointment_details");
		var row = table.insertRow(currentIndex);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		cell1.innerHTML = "<div class='form-group'><div class='col-sm-8'><select name='app_type[]' id='selector1' class='form-control1' required='required' onchange='setFields(this)'><option value=''>SELECT</option><option value='regular'>Regular</option><option value='adhoc'>Adhoc</option></select></div></div>";
		cell2.innerHTML = "<div class='form-group'><div class='col-md-4'><div class='input-group'><input type='date' name='ten_start[]' class='form-control1' required='required'></div></div></div>";
		cell3.innerHTML = "<div class='form-group'><div class='col-md-4'><div class='input-group'><input type='date' name='ten_end[]' id='ten_end"+currentIndex+"' class='form-control1' required='required'></div></div></div>";
		cell4.innerHTML = "<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='text' name='app_no[]' class='form-control1' placeholder='Letter Ref. Number' required='required'></div></div></div>";
		cell5.innerHTML = "<div class='form-group'><div class='col-md-12'><div class='input-group'><input type='file' name='appointment_file[]' required='required'></div></div></div>";
    }
	
	function setFields(type)
	{
		//var type=element.value;
		//var row=element.parentNode.parentNode.parentNode.parentNode.rowIndex;
		if(type=="agp")
		{
			document.getElementById("agp").style.display='block'; 
			document.getElementById("desig").style.display='none'; 
		}
		else if(type=="promotion")
		{
			document.getElementById("agp").style.display='none'; 
			document.getElementById("desig").style.display='block';
		}
		
	}
	function deleteLetter(number)
	{
		//alert(number);
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("app_table").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "delete_training.php?doc_id=" + number, true);
        xmlhttp.send();
	}
    </script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>