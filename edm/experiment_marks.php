
<!DOCTYPE HTML>
<html>
<head>
<title>SAKEC - Course Outcome Assessment System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<?php
include 'login_config.php';
?>
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
        include "courses_sidebar.php";
        ?>
        <!--left-fixed -navigation-->
        
        <!-- header-starts -->
    
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
        <div class="row">
            <h3 class="title1">Assignment :</h3>
                <div class="form-three widget-shadow">
                <div class=" panel-body-inputin">
                <form action="testabc_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label">Select Class:</label>
                    <div class="col-sm-8">
                    <select name="sem" id="selector1" class="form-control1" >
                    <option value=''>Select</option>
                    <?php
                    $branch_code=$_SESSION['branch_code'];
                    $term=$_SESSION['term'];
                    $dept=$_SESSION["dept"];
                    $courseid=$_SESSION['course_id'];
                    $batch=array();
                    $class=array();
                    $batch_qry="Select * from `faculty_info_lab` where `course_id`='$courseid' and `tchr_id`='".$_SESSION['tchr_id']."' ";
                    echo $batch_qry;              
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
                     
                     
                        echo "<option value='BE1'>BE1</option>";
                        echo "<option value='BE2'>BE2</option>";
                        echo "<option value='BE3'>BE3</option>";
                        echo "<option value='BE4'>BE4</option>";
                     
                     
                    ?>
                    </select>
                    <br><br>
                    </div>
                </div>


                 <div class="form-group">
                    <label for="selector1" class="col-sm-2 control-label">Select Assignment:</label>
                    <div class="col-sm-8">
                    <select name="ia" id="selector2" class="form-control1" onchange="getBatch(this.value)">
                    <option value=''>Select</option>
                    <?php
                     
                     
                        echo "<option value='Assignment1'>Assignment 1</option>";
                        echo "<option value='Assignmnet2'>Assignment 2</option>";
                     
                     
                    ?>
                    </select>
                    <br><br>
                    </div>
                </div>
            <div style="overflow-x:auto "  >
            <div style="overflow-y:auto">
                <table id="course_ic" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Roll No.</th>
                        <th>Name</th>
                        <th>Q.1</th>
                        <th>Q.2</th>
                        <th>Q.3</th>
                        <th>Q.4</th>
                       
                        <th>Total Marks</th>
                    </tr>
                </thead>
                <tbody id="batch_body">
                </tbody>
                </table>
                

            </div>
                <center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Save</button></center><br><br>
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
 
    new $.fn.dataTable.FixedHeader( table );
} );

function getBatch(ia)
{
    //alert(sbatch);
    var batch=document.getElementById('selector1').value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("batch_body").innerHTML = this.responseText; 
        }
    };
    xmlhttp.open("GET", "get_batch.php?batch=" + batch+"&ia=" + ia,true);
    xmlhttp.send();
}

// function getIa(ia)
// {
//     //alert(sem);
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("batch_body").innerHTML = this.responseText;
//         }
//     };
//     xmlhttp.open("GET", "get_batch.php?ia=" + ia, true);
//     xmlhttp.send();
// }


function removeRequired(checkbox)
{
    document.getElementById(checkbox+"ic").required=false;
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