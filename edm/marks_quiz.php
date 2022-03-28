
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
        include "theory_course_pages_sidebar.php";
        ?>
        <!--left-fixed -navigation-->
        
        <!-- header-starts -->
    
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
        <div class="row">
            <h3 class="title1"><b>Quiz</b> (<?php echo $_SESSION['course_id']; ?>):</h3>
                <div class="form-three widget-shadow">
                <div class=" panel-body-inputin">
                <form action="testabc_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                   
                    <?php
                    //session_start();
                    
                    $branch_code=$_SESSION['branch_code'];
                    $term=$_SESSION['term'];
                    //$x=explode('-', $term);
                    $dept=$_SESSION["dept"];
                    $tchr_id=$_SESSION["emp_code"];
                    $course_id=$_SESSION['course_id'];
                    $flag=$_SESSION["flag"];
                    $batch=array();
                    $class=array();
                    $exp=array();
                    $quiz=array();

                    // if ($x[0] == 'SH') {
                    //     $flag=1;  // 1 is for ODD SEM
                    // }
                    // else{
                    //     $flag=0;
                    // }
                    $lo_quiz_qry="SELECT * FROM `faculty_info_lab` WHERE `course_id`='$course_id'";
                   
                    $lo_quiz_result = mysqli_query($conn,$lo_quiz_qry);

                 

                    $batch_qry="Select `batch` from `faculty_info_lab` where `course_id`='$course_id' and `tchr_id`='$tchr_id' and `term`='$term'";
                  
                    $class_qry="Select `class_code` from `faculty_info_lab` where `course_id`='$course_id' and `tchr_id`='$tchr_id' and `term`='$term'";
                
                    $batch_result = mysqli_query($conn,$batch_qry);
                    
                    $class_result = mysqli_query($conn,$class_qry);

                    if (mysqli_num_rows($batch_result) > 0) 
                    {
                        while($batch_row = mysqli_fetch_assoc($batch_result))
                        {
                           
                            $batch[]=implode($batch_row, "-");
                        }
                    }

                    if (mysqli_num_rows($class_result) > 0) 
                    {
                        while($class_row = mysqli_fetch_assoc($class_result))
                        {
                           
                            $class[]=implode($class_row, "-");
                        }
                    }
                    
                    echo "CLASS:";
                    echo "<select name='sem' id='selector1' class='form-control1' onchange=getBatchValue(this.value)>";
                    echo "<option value=''>Select</option>";
                    foreach (array_unique($class) as $c) {
                        echo "<option value='$c'>$c</option>";
                    }
                    echo "</select>";
                    


                    echo "BATCH:";
                    echo "<select name='sem' id='selector2' class='form-control1' onchange=StudentName(this.value)>";
                    // echo "<option value=''>Select</option>";
                    // foreach (array_unique($batch) as $b) {
                    //     echo "<option value='$b'>$b</option>";
                    // }
                    echo "</select>";  
                    ?>                                     
                   
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


var abc=<?php echo json_encode($flag); ?>;

function getBatchValue(str) {                 
  if (str == "") {
    document.getElementById("selector2").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("selector2").innerHTML = this.responseText;
      }

    };
    xmlhttp.open("GET","get_batch_value.php?class="+str,true);
    xmlhttp.send();
  }
}

function StudentName(str1) {
   
               
  if (str1 == "") {
    
    document.getElementById("tableid").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tableid").innerHTML = this.responseText;
      }

    };
    xmlhttp.open("GET","get_student_name_quiz.php?batch="+str1+"&class="+document.getElementById("selector1").value,true);
    xmlhttp.send();
  }
}







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