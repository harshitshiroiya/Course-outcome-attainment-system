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
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
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
		include "lab_course_pages_sidebar.php";
		?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="row">
			<h3 class="title1"><b>GAP IDENTIFICATION LO</b> (<?php echo $_SESSION['course_id']; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form id="co_am_form" onsubmit="return checkTotal()" action="lo_gap_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<div class="table-responsive bs-example widget-shadow" data-example-id="contextual-table">
				<table class="table table-bordered">
				<?php
				include 'login_config.php';
				//session_start();
				$branch_code=$_SESSION['branch_code'];
				$course_id=$_SESSION['course_id'];
				$term=$_SESSION['term'];
				$dept=$_SESSION["dept"];
				$gap=array();
                $gap_nm=array();
                $lo=array();
				$co_qry="SELECT * FROM `lo_list` WHERE `lo_id` LIKE '$course_id%'";
				$gap_qry="SELECT `sr_no`,`module_no`,`module_name`,`gap_identification`,`lo_no`,`po` FROM `gap_identification_lo` WHERE `course_id`='$course_id'";
				$co_gap_qry="SELECT * FROM `gap_identification_lo` WHERE `course_id`='$course_id'";
				//echo $co_am_qry;

				$co_gap_result = mysqli_query($conn,$co_gap_qry);
				
				$co_result = mysqli_query($conn,$co_qry);
				$x=0;
				
				if (mysqli_num_rows($co_result) > 0) 
				{
					$gap_result = mysqli_query($conn,$gap_qry);

					$fieldinfo = $gap_result -> fetch_fields();
					foreach ($fieldinfo as $val) {
    					$gap[]=$val -> name;  							
                      }                  
					while($co_row = mysqli_fetch_assoc($co_result))
					{
						$lo[]=$co_row;
					}
				}
				?>
				<thead>
				<th>Sr No.</th>
                <th>Module no.</th>
                <th>Module name</th>
                <th>Gap Identification</th>
                <th>LO No.</th>
				<th>PO</th>
				
				</thead>		
				<tbody id="co_am">
				<?php
				$no=1;
				if (mysqli_num_rows($co_gap_result) > 0) 
				{
					while($co_gap_row = mysqli_fetch_assoc($co_gap_result))
					{
						// echo implode(',',$exit);
						// echo "<br>";
						for($y=0;$y<sizeof($gap);$y++)
						{
							// echo $co_exit_row[$exit[$y]];
							
							echo "<td><input type='text' name='".$gap[$y]."[]' value='".$co_gap_row[$gap[$y]]."' class='form-control1' value=0 max='100' min='0' onchange='calculateSum(this)' oninput='validity.valid || (value=0);' readonly style='background-color:#dfdfdf;'></td>";
											
							
						}
						
						echo "</tr>";
					}
				}
				else
				{

                    for($i=1;$i<3;$i++){
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo"<td><input type='number' name='syll_module[]' class='form-control1' min='1' max='20' step='1'></td>";
                        echo "<td><textarea name='module_name[]' id='txtarea1'  class='form-control1' ></textarea></td>";
                        echo "<td><textarea name='gap_identification[]' id='txtarea1'  class='form-control1' ></textarea></td>";
                        echo'<td><div class="form-group1 col-md-8">';
				        echo'<select id="pso_select" name="lo[]" class="form-control1" required="required"><option value="">Select</option>';
				        
				        for ($b = 0; $b < sizeof($lo); $b++)
				        {
					        $lo_no=$b+1;
					        echo "<option value='".$lo[$b]['lo_no']."'>LO".$lo_no."</option>";
				        }
                        echo"</select></div></td>";
                        echo "<td><textarea name='po[]' id='txtarea1'  class='form-control1' ></textarea></td>";
                        echo "</tr>";
                    }
					// if (mysqli_num_rows($co_result) > 0) 
					// {
					// 	while($co_row = mysqli_fetch_assoc($co_result))
					// 	{
					// 		echo "<tr>";
					// 		echo "<td>".$co_row['co_no']."</td>";
					// 		echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='co_id[]' class='form-control1' value=".$co_row['co_id']." readonly></div></div></div></td>";
					// 		for($y=0;$y<sizeof($quiz);$y++)
					// 		{
					// 			echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='number' name='".$quiz[$y]."[]' class='form-control1' value=0 max='100' min='0' onchange='calculateSum(this)' oninput='validity.valid || (value=0);'></div></div></div></td>";
					// 		}
					// 		echo "<td><div class='form-group'><div class='col-md-6'><input type='number' name='total[]' class='form-control1' value='0' max='100' min='100' readonly style='background-color:#C0C0C0;'></div><div class='col-md-6'></div></div></td>";
							
					// 	}
					// }
				}
				?>
				</tbody></table>
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
			

			function calculateSum(w)
			{
				//alert(w.parentElement.parentElement.parentElement.parentElement.parentElement);
				var val1=Number(w.value);
				var sum=0;
				var rowcells=w.parentElement.parentElement.parentElement.parentElement.parentElement.cells.length;
				//alert(rowcells);
				var row=w.parentElement.parentElement.parentElement.parentElement.parentElement;
				for(i=2;i<rowcells-1;i++)
				{
					//alert(row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
					sum+=Number(row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].value);
					//alert(sum);
				}
				//alert(row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].nodeName);
				row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].value=sum;
				if(sum==100)
				{
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.backgroundColor="#90ee90";
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.color="#000000";
					//alert(row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
				}
				else
				{
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.backgroundColor="#ff0000";
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.color="#ffffff";
					//alert(row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
				}

			}

			function checkTotal()
			{
				var total=document.getElementsByName('total[]');
				for (var i = 0; i < total.length; i++)
				{ 
					var a = total[i].value; 
					//alert(a);
					if (a<100 || a>100)
					{
						alert("Sum of contribution of all assessment methods for each CO should not be less or greater than 100. Please check the values entered in the table.")
						return false;
					}
				}
			}

			function editRow(w)
			{
				//alert(w.parentElement.parentElement.parentElement.parentElement);
				document.getElementById("co_am_form").action = "co_am_update.php";
				var rowcells=w.parentElement.parentElement.parentElement.parentElement.cells.length;
				//alert(rowcells);
				var row=w.parentElement.parentElement.parentElement.parentElement;
				for(i=2;i<rowcells-1;i++)
				{
					row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].readOnly = false;
					row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].style.backgroundColor="#ffffff";
					//alert(row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
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