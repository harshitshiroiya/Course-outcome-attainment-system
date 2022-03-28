<html>
<head>
<script src="js/classie.js"></script>
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
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
			classie.toggle( showLeftPush, 'enable' );
		}
	}
</script>
</head>
<body onload="myFunction();">
<!--<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
            </button>
            <a class="navbar-brand" href="index.html"><img width="100%" src="images/edm_logo.png"></a><br/><br/>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="treeview">
                <a href="index.html">
                <i class="fa fa-edit"></i> <span>Personal Informaton</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="index.html">
                <i class="fa fa-graduation-cap"></i> <span>Qualification Detals</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="appointment_details.html">
                <i class="fa fa-file-pdf-o"></i> <span>Appointment Detals</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="cas_details.html">
                <i class="fa fa-line-chart"></i> <span>CAS Details</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="training_details.html">
                <i class="fa fa-plus-square"></i> <span>STTP/FDP/Workshop Details</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="training_details.html">
                <i class="fa fa-plus-square"></i> <span>Other Info</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="training_details.html">
                <i class="fa fa-plus-square"></i> <span>Some Other Info</span>
                </a>
              </li>
      </nav>
    </aside>
	</div>-->
	<div class="sticky-header header-section ">
			<div class="header-left">
			<a class="navbar-brand" href="index.html"><img width="100%" src="images/edm_logo.png"></a><br/><br/>
				<!--toggle button start
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							
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
		</body>
</html>