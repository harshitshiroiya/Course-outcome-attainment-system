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
            <h3 class="title1"><b>University InDirect Method Calculation - Quiz</b> (<?php echo $_SESSION['course_id']; ?>):</h3>
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
                        
error_reporting (E_ALL & ~E_NOTICE & ~E_WARNING);


        ////////////////////COPY FROM HERE (calc part)///////////////////////////////
        $co_id_qry="SELECT `quiz_co`.`co_id` FROM `quiz_co` WHERE `course_id`='$course_id'";
        $co_id_result = mysqli_query($conn,$co_id_qry);

          

        // $sql= "Select `assignment_lo`.`lo_id`,`assignment_lo`.`course_id`, (`assignment_lo`.`A1_1`*`marks_assignment`.`A1_1`)/100 as a1_1_c,(`assignment_lo`.`A1_2`*`marks_assignment`.`A1_2`)/100 as a1_2_c,(`assignment_lo`.`A1_3`*`marks_assignment`.`A1_3`)/100 as a1_3_c,(`assignment_lo`.`A1_4`*`marks_assignment`.`A1_4`)/100 as a1_4_c,(`assignment_lo`.`A1_5`*`marks_assignment`.`A1_5`)/100 as a1_5_c,(`assignment_lo`.`A2_1`*`marks_assignment`.`A2_1`)/100 as a2_1_c,(`assignment_lo`.`A2_2`*`marks_assignment`.`A2_2`)/100 as a2_2_c,(`assignment_lo`.`A2_3`*`marks_assignment`.`A2_3`)/100 as a2_3_c,(`assignment_lo`.`A2_4`*`marks_assignment`.`A2_4`)/100 as a2_4_c,(`assignment_lo`.`A2_5`*`marks_assignment`.`A2_5`)/100 as a2_5_c, `marks_assignment`.`course_id`,`marks_assignment`.`std_id` FROM `assignment_lo`,`marks_assignment` WHERE `assignment_lo`.`course_id` = `marks_assignment`.`course_id` ";

        // $sql= "Select `assignment_lo`.`lo_id`,`assignment_lo`.`course_id`, (`assignment_lo`.`A1_1`*`marks_assignment`.`A1_1`)/100 as a1_1_c, `marks_assignment`.`course_id`,`marks_assignment`.`std_id` FROM `assignment_lo`,`marks_assignment` WHERE `assignment_lo`.`course_id` = `marks_assignment`.`course_id`" ;



        $sql100 ="SELECT count(*) as ts FROM `marks_quiz` WHERE `quiz1` > '0' ";

        $sql60 ="SELECT count(CASE WHEN `quiz1` >= '12' THEN 1 END ) as a1 ,count(CASE WHEN `quiz2` >= '12' THEN 1 END) as a2 , count(CASE WHEN `quiz3` >= '12' THEN 1 END )as a3,count(CASE WHEN `quiz4` >= '12' THEN 1 END )as a4 ,count(CASE WHEN `quiz5` >= '12' THEN 1 END) as a5   FROM `marks_quiz`";
        $result = $conn -> query($sql60);
        $result100 = $conn -> query($sql100);


        $a1=array();
        $a2=array();
        $a3=array();
        $a4=array();
        $a5=array();
        $ts=array();

        while ( $row = $result -> fetch_assoc()) {
        $a1=($row["a1"]);
        $a2=($row["a2"]);
        $a3=($row["a3"]);
        $a4=($row["a4"]);
        $a5=($row["a5"]);
        }

        while ($row1 = $result100 -> fetch_assoc()) {
            $ts=($row1["ts"]);
            
        }



        $a1c = number_format(($a1/$ts)*100,2);

        $a2c = number_format(($a2/$ts)*100,2);

        $a3c = number_format(($a3/$ts)*100,2);

        $a4c = number_format(($a4/$ts)*100,2);

        $a5c = number_format(($a5/$ts)*100,2);

        


            if ($a1c >= 70) {
              $a1c1=3;
            }
            elseif ($a1c >= 65 && $a1c <= 70) {
              $a1c1=2;
            }
            elseif ($a1c >= 60 && $a1c <= 65) {
              $a1c1=1;
            }
            else{
              $a1c1=number_format($a1c/60,2);
            }


            if ($a2c >= 70) {
              $a2c1=3;
            }
            elseif ($a2c >= 65 && $a2c <= 70) {
              $a2c1=2;
            }
            elseif ($a2c >= 60 && $a2c <= 65) {
              $a2c1=1;
            }
            else{
              $a2c1=number_format($a2c/60,2);
            }


            if ($a3c >= 70) {
              $a3c1=3;
            }
            elseif ($a3c >= 65 && $a3c <= 70) {
              $a3c1=2;
            }
            elseif ($a3c >= 60 && $a3c <= 65) {
              $a3c1=1;
            }
            else{
              $a3c1=number_format($a3c/60,2);
            }

            if ($a4c >= 70) {
              $a4c1=3;
            }
            elseif ($a4c >= 65 && $a4c <= 70) {
              $a4c1=2;
            }
            elseif ($a4c >= 60 && $a4c <= 65) {
              $a4c1=1;
            }
            else{
              $a4c1=number_format($a4c/60,2);
            }


            if ($a5c >= 70) {
              $a5c1=3;
            }
            elseif ($a5c >= 65 && $a5c <= 70) {
              $a5c1=2;
            }
            elseif ($a5c >= 60 && $a5c <= 65) {
              $a5c1=1;
            }
            else{
              $a5c1=number_format($a5c/60,2);
            }


        

        //LO1
        $sql_lo1="SELECT `quiz1` as aw1,`quiz2`as aw2,`quiz3`as aw3,`quiz4`as aw4,`quiz5`as aw5 FROM `quiz_co` WHERE `co_id`='ITC302.1'";
        $result_lo1 = $conn -> query($sql_lo1);

        while ( $row_lo1 = $result_lo1 -> fetch_assoc()) {
            $w1=($row_lo1["aw1"]);
            $w2=($row_lo1["aw2"]);
            $w3=($row_lo1["aw3"]);
            $w4=($row_lo1["aw4"]);
            $w5=($row_lo1["aw5"]);
        }

        $a_final_lo1 = number_format(($a1c1*$w1 + $a2c1*$w2 + $a3c1*$w3 + $a4c1*$w4 + $a5c1*$w5)/100,2);

        //echo $a_final_lo1;
        

        //LO2
        $sql_lo2="SELECT `quiz1` as aw1,`quiz2`as aw2,`quiz3`as aw3,`quiz4`as aw4,`quiz5`as aw5 FROM `quiz_co` WHERE `co_id`='ITC302.2'";
        $result_lo2 = $conn -> query($sql_lo2);

        while ( $row_lo2 = $result_lo2 -> fetch_assoc()) {
            $w21=($row_lo2["aw1"]);
            $w22=($row_lo2["aw2"]);
            $w23=($row_lo2["aw3"]);
            $w24=($row_lo2["aw4"]);
            $w25=($row_lo2["aw5"]);
                               
        }
        $a_final_lo2 = number_format(($a1c1*$w21 + $a2c1*$w22 + $a3c1*$w23 + $a4c1*$w24 + $a5c1*$w25 )/100,2);

        // echo $a_final_lo2;

        //LO3
        $sql_lo3="SELECT `quiz1` as aw1,`quiz2`as aw2,`quiz3`as aw3,`quiz4`as aw4,`quiz5`as aw5 FROM `quiz_co`  WHERE `co_id`='ITC302.3'";
        $result_lo3 = $conn -> query($sql_lo3);

        while ( $row_lo3 = $result_lo3 -> fetch_assoc()) {
            $w31=($row_lo3["aw1"]);
            $w32=($row_lo3["aw2"]);
            $w33=($row_lo3["aw3"]);
            $w34=($row_lo3["aw4"]);
            $w35=($row_lo3["aw5"]);

                               
        }
        $a_final_lo3 = number_format(($a1c1*$w31 + $a2c1*$w32 + $a3c1*$w33 + $a4c1*$w34 + $a5c1*$w35 )/100,2);

        //echo $a_final_lo3;

        //LO4
        $sql_lo4="SELECT `quiz1` as aw1,`quiz2`as aw2,`quiz3`as aw3,`quiz4`as aw4,`quiz5`as aw5 FROM `quiz_co` WHERE `co_id`='ITC302.4'";
        $result_lo4 = $conn -> query($sql_lo4);

        while ( $row_lo4 = $result_lo4 -> fetch_assoc()) {
            $w41=($row_lo4["aw1"]);
            $w42=($row_lo4["aw2"]);
            $w43=($row_lo4["aw3"]);
            $w44=($row_lo4["aw4"]);
            $w45=($row_lo4["aw5"]);
            
                               
        }

        $a_final_lo4 = number_format(($a1c1*$w41 + $a2c1*$w42 + $a3c1*$w43 + $a4c1*$w44 + $a5c1*$w45 )/100,2);

        //echo $a_final_lo4;

        //LO5

        $sql_lo5="SELECT `quiz1` as aw1,`quiz2`as aw2,`quiz3`as aw3,`quiz4`as aw4,`quiz5`as aw5 FROM `quiz_co` WHERE `co_id`='ITC302.5'";
        $result_lo5 = $conn -> query($sql_lo5);

        while ( $row_lo5 = $result_lo5 -> fetch_assoc()) {
            $w51=($row_lo5["aw1"]);
            $w52=($row_lo5["aw2"]);
            $w53=($row_lo5["aw3"]);
            $w54=($row_lo5["aw4"]);
            $w55=($row_lo5["aw5"]);
                               
        }
        $a_final_lo5 = number_format(($a1c1*$w51 + $a2c1*$w52 + $a3c1*$w53 + $a4c1*$w54 + $a5c1*$w55 )/100,2);
        // echo $a_final_lo5;

        //LO6

        $sql_lo6="SELECT `quiz1` as aw1,`quiz2`as aw2,`quiz3`as aw3,`quiz4`as aw4,`quiz5`as aw5 FROM `quiz_co` WHERE `co_id`='ITC302.6'";
        $result_lo6 = $conn -> query($sql_lo6);

        while ( $row_lo6 = $result_lo6 -> fetch_assoc()) {
            $w61=($row_lo6["aw1"]);
            $w62=($row_lo6["aw2"]);
            $w63=($row_lo6["aw3"]);
            $w64=($row_lo6["aw4"]);
            $w65=($row_lo6["aw5"]);
                               
        }

        $a_final_lo6 = number_format(($a1c1*$w61 + $a2c1*$w62 + $a3c1*$w63 + $a4c1*$w64 + $a5c1*$w65 )/100,2);

        //echo $a_final_lo6;

        /////////////////////////////////////////COPY TILL HERE (CALC PART)///////////////////

//FF0000

                                //echo "<tr><th>% of Students getting equal or more than :</th><td>".$c." %</td></tr>";
                                echo "<p'align:center'><h3><b><span style='color: #14147e'>The Following result of '$course_id' is for '$term'  Term.</span></b></h3></p>";
                                echo "<br>";
                                echo "<tr><th>ATTAINMENT LEVEL OF QUIZ IN <span style='color: red'>CO1 </span> OF '$course_id' :</th><td>".$a_final_lo1."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF QUIZ IN <span style='color: red'>CO2 </span> OF '$course_id' :</th><td>".$a_final_lo2."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF QUIZ IN <span style='color: red'>CO3 </span> OF '$course_id' :</th><td>".$a_final_lo3."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF QUIZ IN <span style='color: red'>CO4 </span> OF '$course_id' :</th><td>".$a_final_lo4."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF QUIZ IN <span style='color: red'>CO5 </span> OF '$course_id' :</th><td>".$a_final_lo5."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF QUIZ IN <span style='color: red'>CO6 </span> OF '$course_id' :</th><td>".$a_final_lo6."</td></tr>";


                                
                                                // echo "<table>";
                //echo "<tbody>";
                //        echo "<tr><th>% of Students getting equal or more than :</th><td>".$a1c." %</td></tr>"; 
                //     echo "</tbody>";
                // echo "</table>";




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