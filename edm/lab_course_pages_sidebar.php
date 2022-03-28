<?php
session_start();
$user=$_SESSION['name'];
$role=$_SESSION['role'];
$dept=$_SESSION['dept'];

include 'login_config.php';

$dept_qry="SELECT `branch_id` from `branch` where `branch_name`='$dept'";
$result = mysqli_query($conn,$dept_qry);
if(mysqli_num_rows($result)==1)
{
	$row = mysqli_fetch_assoc($result);
	$branch_code=$row["branch_id"];
}

$_SESSION['branch_code']=$branch_code;
?>

<html>
<head>
<script src="js/classie.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>



</head>
<body>
<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left cbp-spmenu-open" id="cbp-spmenu-s1">
<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="index.html"><img width="100%" src="images/edm_logo.png"></a><br/><br/>-->
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu" >
              <li class="treeview">
                <a href="theory_course_teacher_info.php">
                <i class="fa fa-graduation-cap"></i> <span>Faculty Information</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="lo_list.php">
                <i class="fa fa-list"></i> <span>List of Lab Outcome (LO)</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="define_labam.php">
                <i class="fa fa-clipboard"></i> <span>Lab Assessment Methods</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="lo_am.php">
                <i class="fa fa-clipboard"></i> <span>AM Contribution in every LO</span>
                </a>
              </li>
              <li class="treeview">
                <a href="experiment_lo.php">
                <i class="fa fa-clipboard"></i> <span>LO Experiment Mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="assignment_mapping_lo.php">
                <i class="fa fa-clipboard"></i> <span>LO Assignment Mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="tutorial_mapping_lo.php">
                <i class="fa fa-clipboard"></i> <span>LO Tutorial Mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="lo_quiz_mapping.php">
                <i class="fa fa-clipboard"></i> <span>LO Quiz Mapping</span>
                </a>
              </li>
              </li>
              <li class="treeview">
                <a href="selected_lo.php">
                <i class="fa fa-clipboard"></i> <span>Selected Assesment Methods</span>
                </a>
              </li> 	
              <li class="treeview">
                <a href="lo_po_pso_mapping.php">
                <i class="fa fa-clipboard"></i> <span>LO PO and PSO Mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="po_pso_mapping_of_lo.php">
                <i class="fa fa-clipboard"></i> <span>Lab Course - PO,PSO Mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="lo_exit.php">
                <i class="fa fa-clipboard"></i> <span>Lab Exit Survey LO mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="gap_identification_lo.php">
                <i class="fa fa-graduation-cap"></i> <span>GAP identification</span>
                </a>
              </li>
              <li class="treeview">
                <a href="gap_action.php">
                <i class="fa fa-graduation-cap"></i> <span>GAP Action</span>
                </a>
              </li>
              <li class="treeview">
                <a href="facility_mapping_lo.php">
                <i class="fa fa-graduation-cap"></i> <span>Facilities and Experiments Mapping</span>
                </a>
              </li>
              <li class="treeview">
                <a href="information_communication_lo.php">
                <i class="fa fa-graduation-cap"></i> <span>Information and Communication Technology (ICT)</span>
                </a>
              </li>
			  </ul>
      </nav>
    </aside>
	</div>
	<div class="sticky-header header-section ">
			<div class="header-left">
			<a class="navbar-brand" href="index.html"><img width="100%" src="images/edm_logo.png"></a><br/><br/>
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="user_dashboard.php" class="dropdown-toggle" aria-expanded="false"><i class="fa fa-home"></i> My Courses </a>
						</li>
						<li class="dropdown head-dpdn">
							<a href="lab_course_home.php" class="dropdown-toggle" aria-expanded="false"><i class="fas fa-chalkboard"></i> Course Home </a>
						</li>
						<!--<li class="dropdown head-dpdn">
							<a href="admin_dashboard.php" class="dropdown-toggle" aria-expanded="false"><i class="fa fa-home"></i>Login Home</a>
						</li>				--->		
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
										<p><?php echo $user; ?></p>
										<span><?php echo $role."<br>"; ?></span>
										<span><?php echo $dept; ?></span>
										
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
								<li> <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>

		

		</body>
</html>