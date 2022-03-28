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

/* table row input width */
.table_row td .form-group{
  width:120px;
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
            <h3 class="title1"><b>University InDirect Method Calculation - Miniproject</b> (<?php echo $_SESSION['course_id']; ?>):</h3>
                <div class="form-three widget-shadow">
                <div class=" panel-body-inputin">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <tbody>
                    <?php
                        include 'login_config.php';

                        $branch_code=$_SESSION['branch_code'];
                        $term=$_SESSION['term'];
                        $dept=$_SESSION["dept"];
                        $tchr_id=$_SESSION["emp_code"];
                        $course_id=$_SESSION['course_id'];
                        $flag=$_SESSION["flag"];
                        



                        $sql ="SELECT count(*) as c1 FROM `marks_miniproject` WHERE `miniproject` > '12' ";
                        $sql1 ="SELECT count(*) as c2 FROM `marks_miniproject` WHERE `miniproject` > '0' ";
                         

                        $result = mysqli_query($conn,$sql);
                        $result1 = mysqli_query($conn,$sql1);
                        
                        
                        $mp=array();
                        $mp_t=array();
     

                         echo "<br><br><br>";
                        
                            while ( $row = $result -> fetch_assoc()) {
                             
                            $mp=($row["c1"]);
                            //echo $th;
                            //echo "<br>";
                            

                            //echo "<br><br>";
                           
                            }
                           
                            while ( $row1 = $result1 -> fetch_assoc()) {
                             
                            $mp_t=($row1["c2"]);
                            //echo $th_t;
                            //echo "<br>";
                            

                            //echo "<br><br>";
                           
                            }

                            

                            $c= number_format(($mp/$mp_t)*100,2);
                            //echo $c;
                            //echo "<br><br>";
                            $d = number_format(($c*80)/1000,2);
                            //echo $d;

                             //echo "<br><br>";

                            

                            if ($c >= 70) {
                                $c1=3;
                            }
                            elseif ($c >= 65 && $c <= 70) {
                                $c1=2;
                            }
                            elseif ($c >= 60 && $c <= 65) {
                                $c1=1;
                            }
                            else{
                                $c1=number_format($c/60,2);
                            }
                            



                          
                           



                            $final= number_format(($c1*80)/100,2); 
                            // echo "<br><br>ATTAINMENT LEVEL FOR University of '$course_id'"; 
                            // echo "<br>";
                            // echo $final;



                                echo "<tr><th>% of Students getting equal or more than 60% :</th><td>".$c." %</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL (MINIPROJECT):</th><td>".$c1."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL FOR MINIPROJECT OF '$course_id':</th><td>".$final."/3</td></tr>";
                                // echo "<tr><th>Course Name</th><td>".$row['course_name']."</td></tr>";
                                // echo "<tr><th>Course Type</th><td>".$row['course_type']."</td></tr>";
                                // echo "<tr><th>Domain Number</th><td>".substr($row['domain_id'],-1)."</td></tr>";
                                // echo "<tr><th>Domain Name</th><td>".$row['domain_name']."</td></tr>";
                                // echo "<tr><th>Domain I/c</th><td>".$row['e_name']."</td></tr>";
                                // echo "<tr><th>Semester</th><td>".$row['sem']."</td></tr>";
                                // echo "<tr><th>Term</th><td>".$term."</td></tr>";





                        ?>
                    </tbody>
                </table>                                    
                   
                   <br><br>
                    </div>
                </div>
            <div style="overflow-x:auto">
            <div style="overflow-y:auto">

                <div id="tableid">
                <div class="table-responsive bs-example widget-shadow" data-example-id="contextual-table">
                
               
            </div>
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