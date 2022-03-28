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
            <h3 class="title1"><b>University InDirect Method Calculation - Tutorials</b> (<?php echo $_SESSION['course_id']; ?>):</h3>
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
        $co_id_qry="SELECT `tutorial_co`.`co_id` FROM `tutorial_co` WHERE `course_id`='$course_id'";
        $co_id_result = mysqli_query($conn,$co_id_qry);

          

        // $sql= "Select `assignment_lo`.`lo_id`,`assignment_lo`.`course_id`, (`assignment_lo`.`A1_1`*`marks_assignment`.`A1_1`)/100 as a1_1_c,(`assignment_lo`.`A1_2`*`marks_assignment`.`A1_2`)/100 as a1_2_c,(`assignment_lo`.`A1_3`*`marks_assignment`.`A1_3`)/100 as a1_3_c,(`assignment_lo`.`A1_4`*`marks_assignment`.`A1_4`)/100 as a1_4_c,(`assignment_lo`.`A1_5`*`marks_assignment`.`A1_5`)/100 as a1_5_c,(`assignment_lo`.`A2_1`*`marks_assignment`.`A2_1`)/100 as a2_1_c,(`assignment_lo`.`A2_2`*`marks_assignment`.`A2_2`)/100 as a2_2_c,(`assignment_lo`.`A2_3`*`marks_assignment`.`A2_3`)/100 as a2_3_c,(`assignment_lo`.`A2_4`*`marks_assignment`.`A2_4`)/100 as a2_4_c,(`assignment_lo`.`A2_5`*`marks_assignment`.`A2_5`)/100 as a2_5_c, `marks_assignment`.`course_id`,`marks_assignment`.`std_id` FROM `assignment_lo`,`marks_assignment` WHERE `assignment_lo`.`course_id` = `marks_assignment`.`course_id` ";

        // $sql= "Select `assignment_lo`.`lo_id`,`assignment_lo`.`course_id`, (`assignment_lo`.`A1_1`*`marks_assignment`.`A1_1`)/100 as a1_1_c, `marks_assignment`.`course_id`,`marks_assignment`.`std_id` FROM `assignment_lo`,`marks_assignment` WHERE `assignment_lo`.`course_id` = `marks_assignment`.`course_id`" ;



        $sql100 ="SELECT count(*) as ts FROM `marks_tutorial` WHERE `tut1` > '0' ";

        $sql60 ="SELECT count(CASE WHEN `tut1` >= '12' THEN 1 END ) as a1 ,count(CASE WHEN `tut2` >= '12' THEN 1 END) as a2 , count(CASE WHEN `tut3` >= '12' THEN 1 END )as a3,count(CASE WHEN `tut4` >= '12' THEN 1 END )as a4 ,count(CASE WHEN `tut5` >= '12' THEN 1 END) as a5, count(CASE WHEN `tut6` >= '12' THEN 1 END )as a6,count(CASE WHEN `tut7` >= '12' THEN 1 END )as a7 ,count(CASE WHEN `tut8` >= '12' THEN 1 END)as a8 , count(CASE WHEN `tut9` >= '12' THEN 1 END )as a9,count(CASE WHEN `tut10` >= '12' THEN 1 END )as a10,count(CASE WHEN `tut11` >= '12' THEN 1 END )as a11,count(CASE WHEN `tut12` >= '12' THEN 1 END )as a12,count(CASE WHEN `tut13` >= '12' THEN 1 END )as a13      FROM `marks_tutorial`";
        $result = $conn -> query($sql60);
        $result100 = $conn -> query($sql100);


        $a1=array();
        $a2=array();
        $a3=array();
        $a4=array();
        $a5=array();
        $a6=array();
        $a7=array();
        $a8=array();
        $a9=array();
        $a10=array();
        $a11=array();
        $a12=array();
        $a13=array();
        $ts=array();

        while ( $row = $result -> fetch_assoc()) {
        $a1=($row["a1"]);
        $a2=($row["a2"]);
        $a3=($row["a3"]);
        $a4=($row["a4"]);
        $a5=($row["a5"]);
        $a6=($row["a6"]);
        $a7=($row["a7"]);
        $a8=($row["a8"]);
        $a9=($row["a9"]);
        $a10=($row["a10"]);
        $a11=($row["a11"]);
        $a12=($row["a12"]);
        $a13=($row["a13"]);
        }

        while ($row1 = $result100 -> fetch_assoc()) {
            $ts=($row1["ts"]);
            
        }



        $a1c = number_format(($a1/$ts)*100,2);

        $a2c = number_format(($a2/$ts)*100,2);

        $a3c = number_format(($a3/$ts)*100,2);

        $a4c = number_format(($a4/$ts)*100,2);

        $a5c = number_format(($a5/$ts)*100,2);

        $a6c = number_format(($a6/$ts)*100,2);

        $a7c = number_format(($a7/$ts)*100,2);

        $a8c = number_format(($a8/$ts)*100,2);

        $a9c = number_format(($a9/$ts)*100,2);

        $a10c = number_format(($a10/$ts)*100,2);

        $a11c = number_format(($a11/$ts)*100,2);

        $a12c = number_format(($a12/$ts)*100,2);

        $a13c = number_format(($a13/$ts)*100,2);


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


            if ($a6c >= 70) {
              $a6c1=3;
            }
            elseif ($a6c >= 65 && $a6c <= 70) {
              $a6c1=2;
            }
            elseif ($a6c >= 60 && $a6c <= 65) {
              $a6c1=1;
            }
            else{
              $a6c1=number_format($a6c/60,2);
            }


            if ($a7c >= 70) {
              $a7c1=3;
            }
            elseif ($a7c >= 65 && $a7c <= 70) {
              $a7c1=2;
            }
            elseif ($a7c >= 60 && $a7c <= 65) {
              $a7c1=1;
            }
            else{
              $a7c1=number_format($a7c/60,2);
            }


            if ($a8c >= 70) {
              $a8c1=3;
            }
            elseif ($a8c >= 65 && $a8c <= 70) {
              $a8c1=2;
            }
            elseif ($a8c >= 60 && $a8c <= 65) {
              $a8c1=1;
            }
            else{
              $a8c1=number_format($a8c/60,2);
            }


            if ($a9c >= 70) {
              $a9c1=3;
            }
            elseif ($a9c >= 65 && $a9c <= 70) {
              $a9c1=2;
            }
            elseif ($a9c >= 60 && $a9c <= 65) {
              $a9c1=1;
            }
            else{
              $a9c1=number_format($a9c/60,2);
            }

            if ($a10c >= 70) {
              $a10c1=3;
            }
            elseif ($a10c >= 65 && $a10c <= 70) {
              $a10c1=2;
            }
            elseif ($a10c >= 60 && $a10c <= 65) {
              $a10c1=1;
            }
            else{
              $a10c1=number_format($a10c/60,2);
            }

            if ($a11c >= 70) {
              $a11c1=3;
            }
            elseif ($a11c >= 65 && $a11c <= 70) {
              $a11c1=2;
            }
            elseif ($a11c >= 60 && $a11c <= 65) {
              $a11c1=1;
            }
            else{
              $a11c1=number_format($a11c/60,2);
            }

            if ($a12c >= 70) {
              $a12c1=3;
            }
            elseif ($a12c >= 65 && $a12c <= 70) {
              $a12c1=2;
            }
            elseif ($a12c >= 60 && $a12c <= 65) {
              $a12c1=1;
            }
            else{
              $a12c1=number_format($a12c/60,2);
            }

            if ($a13c >= 70) {
              $a13c1=3;
            }
            elseif ($a13c >= 65 && $a13c <= 70) {
              $a13c1=2;
            }
            elseif ($a13c >= 60 && $a13c <= 65) {
              $a13c1=1;
            }
            else{
              $a13c1=number_format($a13c/60,2);
            }

        //LO1
        $sql_lo1="SELECT `tut1` as aw1,`tut2`as aw2,`tut3`as aw3,`tut4`as aw4,`tut5`as aw5,`tut6`as aw6,`tut7`as aw7,`tut8`as aw8,`tut9`as aw9,`tut10`as aw10, `tut11`as aw11, `tut12`as aw12, `tut13`as aw13 FROM `tutorial_co` WHERE `co_id`='ITC302.1'";
        $result_lo1 = $conn -> query($sql_lo1);

        while ( $row_lo1 = $result_lo1 -> fetch_assoc()) {
            $w1=($row_lo1["aw1"]);
            $w2=($row_lo1["aw2"]);
            $w3=($row_lo1["aw3"]);
            $w4=($row_lo1["aw4"]);
            $w5=($row_lo1["aw5"]);
            $w6=($row_lo1["aw6"]);
            $w7=($row_lo1["aw7"]);
            $w8=($row_lo1["aw8"]);
            $w9=($row_lo1["aw9"]);
            $w10=($row_lo1["aw10"]);
            $w11=($row_lo1["aw11"]);
            $w12=($row_lo1["aw12"]);
            $w13=($row_lo1["aw13"]);
                               
        }
        $a_final_lo1 = number_format(($a1c1*$w1 + $a2c1*$w2 + $a3c1*$w3 + $a4c1*$w4 + $a5c1*$w5 + $a6c1*$w6 + $a7c1*$w7 + $a8c1*$w8 + $a9c1*$w9 + $a10c1*$w10 + $a11c1*$w11 + $a12c1*$w12 + $a13c1*$w13)/100,2);

        //echo $a_final_lo1;
        ;
        //LO2
        $sql_lo2="SELECT `tut1` as aw1,`tut2`as aw2,`tut3`as aw3,`tut4`as aw4,`tut5`as aw5,`tut6`as aw6,`tut7`as aw7,`tut8`as aw8,`tut9`as aw9,`tut10`as aw10, `tut11`as aw11, `tut12`as aw12, `tut13`as aw13 FROM `tutorial_co` WHERE `co_id`='ITC302.2'";
        $result_lo2 = $conn -> query($sql_lo2);

        while ( $row_lo2 = $result_lo2 -> fetch_assoc()) {
            $w21=($row_lo2["aw1"]);
            $w22=($row_lo2["aw2"]);
            $w23=($row_lo2["aw3"]);
            $w24=($row_lo2["aw4"]);
            $w25=($row_lo2["aw5"]);
            $w26=($row_lo2["aw6"]);
            $w27=($row_lo2["aw7"]);
            $w28=($row_lo2["aw8"]);
            $w29=($row_lo2["aw9"]);
            $w210=($row_lo2["aw10"]);
            $w211=($row_lo2["aw11"]);
            $w212=($row_lo2["aw12"]);
            $w213=($row_lo2["aw13"]);
                               
        }
        $a_final_lo2 = number_format(($a1c1*$w21 + $a2c1*$w22 + $a3c1*$w23 + $a4c1*$w24 + $a5c1*$w25 + $a6c1*$w26 + $a7c1*$w27 + $a8c1*$w28 + $a9c1*$w29 + $a10c1*$w210 + $a11c1*$w211 + $a12c1*$w212 + $a13c1*$w213)/100,2);

        // echo $a_final_lo2;

        //LO3
        $sql_lo3="SELECT `tut1` as aw1,`tut2`as aw2,`tut3`as aw3,`tut4`as aw4,`tut5`as aw5,`tut6`as aw6,`tut7`as aw7,`tut8`as aw8,`tut9`as aw9,`tut10`as aw10, `tut11`as aw11, `tut12`as aw12, `tut13`as aw13 FROM `tutorial_co` WHERE `co_id`='ITC302.3'";
        $result_lo3 = $conn -> query($sql_lo3);

        while ( $row_lo3 = $result_lo3 -> fetch_assoc()) {
            $w31=($row_lo3["aw1"]);
            $w32=($row_lo3["aw2"]);
            $w33=($row_lo3["aw3"]);
            $w34=($row_lo3["aw4"]);
            $w35=($row_lo3["aw5"]);
            $w36=($row_lo3["aw6"]);
            $w37=($row_lo3["aw7"]);
            $w38=($row_lo3["aw8"]);
            $w39=($row_lo3["aw9"]);
            $w310=($row_lo3["aw10"]);
            $w311=($row_lo3["aw11"]);
            $w312=($row_lo3["aw12"]);
            $w313=($row_lo3["aw13"]);
                               
        }
        $a_final_lo3 = number_format(($a1c1*$w31 + $a2c1*$w32 + $a3c1*$w33 + $a4c1*$w34 + $a5c1*$w35 + $a6c1*$w36 + $a7c1*$w37 + $a8c1*$w38 + $a9c1*$w39 + $a10c1*$w310 + $a11c1*$w311 + $a12c1*$w312 + $a13c1*$w313)/100,2);

        //echo $a_final_lo3;

        //LO4
        $sql_lo4="SELECT `tut1` as aw1,`tut2`as aw2,`tut3`as aw3,`tut4`as aw4,`tut5`as aw5,`tut6`as aw6,`tut7`as aw7,`tut8`as aw8,`tut9`as aw9,`tut10`as aw10, `tut11`as aw11, `tut12`as aw12, `tut13`as aw13 FROM `tutorial_co` WHERE `co_id`='ITC302.4'";
        $result_lo4 = $conn -> query($sql_lo4);

        while ( $row_lo4 = $result_lo4 -> fetch_assoc()) {
            $w41=($row_lo4["aw1"]);
            $w42=($row_lo4["aw2"]);
            $w43=($row_lo4["aw3"]);
            $w44=($row_lo4["aw4"]);
            $w45=($row_lo4["aw5"]);
            $w46=($row_lo4["aw6"]);
            $w47=($row_lo4["aw7"]);
            $w48=($row_lo4["aw8"]);
            $w49=($row_lo4["aw9"]);
            $w410=($row_lo4["aw10"]);
            $w411=($row_lo4["aw11"]);
            $w412=($row_lo4["aw12"]);
            $w413=($row_lo4["aw13"]);
                               
        }
        $a_final_lo4 = number_format(($a1c1*$w41 + $a2c1*$w42 + $a3c1*$w43 + $a4c1*$w44 + $a5c1*$w45 + $a6c1*$w46 + $a7c1*$w47 + $a8c1*$w48 + $a9c1*$w49 + $a10c1*$w410 + $a11c1*$w411 + $a12c1*$w412 + $a13c1*$w413)/100,2);

        //echo $a_final_lo4;

        //LO5

        $sql_lo5="SELECT `tut1` as aw1,`tut2`as aw2,`tut3`as aw3,`tut4`as aw4,`tut5`as aw5,`tut6`as aw6,`tut7`as aw7,`tut8`as aw8,`tut9`as aw9,`tut10`as aw10, `tut11`as aw11, `tut12`as aw12, `tut13`as aw13 FROM `tutorial_co` WHERE `co_id`='ITC302.5'";
        $result_lo5 = $conn -> query($sql_lo5);

        while ( $row_lo5 = $result_lo5 -> fetch_assoc()) {
            $w51=($row_lo5["aw1"]);
            $w52=($row_lo5["aw2"]);
            $w53=($row_lo5["aw3"]);
            $w54=($row_lo5["aw4"]);
            $w55=($row_lo5["aw5"]);
            $w56=($row_lo5["aw6"]);
            $w57=($row_lo5["aw7"]);
            $w58=($row_lo5["aw8"]);
            $w59=($row_lo5["aw9"]);
            $w510=($row_lo5["aw10"]);
            $w511=($row_lo5["aw11"]);
            $w512=($row_lo5["aw12"]);
            $w513=($row_lo5["aw13"]);
                               
        }
        $a_final_lo5 = number_format(($a1c1*$w51 + $a2c1*$w52 + $a3c1*$w53 + $a4c1*$w54 + $a5c1*$w55 + $a6c1*$w56 + $a7c1*$w57 + $a8c1*$w58 + $a9c1*$w59 + $a10c1*$w510 + $a11c1*$w511 + $a12c1*$w512 + $a13c1*$w513)/100,2);
        // echo $a_final_lo5;

        //LO6

        $sql_lo6="SELECT `tut1` as aw1,`tut2`as aw2,`tut3`as aw3,`tut4`as aw4,`tut5`as aw5,`tut6`as aw6,`tut7`as aw7,`tut8`as aw8,`tut9`as aw9,`tut10`as aw10, `tut11`as aw11, `tut12`as aw12, `tut13`as aw13 FROM `tutorial_co` WHERE `co_id`='ITC302.6'";
        $result_lo6 = $conn -> query($sql_lo6);

        while ( $row_lo6 = $result_lo6 -> fetch_assoc()) {
            $w61=($row_lo6["aw1"]);
            $w62=($row_lo6["aw2"]);
            $w63=($row_lo6["aw3"]);
            $w64=($row_lo6["aw4"]);
            $w65=($row_lo6["aw5"]);
            $w66=($row_lo6["aw6"]);
            $w67=($row_lo6["aw7"]);
            $w68=($row_lo6["aw8"]);
            $w69=($row_lo6["aw9"]);
            $w610=($row_lo6["aw10"]);
            $w611=($row_lo6["aw11"]);
            $w612=($row_lo6["aw12"]);
            $w613=($row_lo6["aw13"]);
                               
        }
        $a_final_lo6 = number_format(($a1c1*$w61 + $a2c1*$w62 + $a3c1*$w63 + $a4c1*$w64 + $a5c1*$w65 + $a6c1*$w66 + $a7c1*$w67 + $a8c1*$w68 + $a9c1*$w69 + $a10c1*$w610 + $a11c1*$w611 + $a12c1*$w612 + $a13c1*$w613)/100,2);

        //echo $a_final_lo6;

        /////////////////////////////////////////COPY TILL HERE (CALC PART)///////////////////

//FF0000

                                //echo "<tr><th>% of Students getting equal or more than :</th><td>".$c." %</td></tr>";
                                echo "<p'align:center'><h3><b><span style='color: #14147e'>The Following result of '$course_id' is for '$term'  Term.</span></b></h3></p>";
                                echo "<br>";
                                echo "<tr><th>ATTAINMENT LEVEL OF ASSIGNMENT IN <span style='color: red'>CO1 </span> OF '$course_id' :</th><td>".$a_final_lo1."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF ASSIGNMENT IN <span style='color: red'>CO2 </span> OF '$course_id' :</th><td>".$a_final_lo2."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF ASSIGNMENT IN <span style='color: red'>CO3 </span> OF '$course_id' :</th><td>".$a_final_lo3."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF ASSIGNMENT IN <span style='color: red'>CO4 </span> OF '$course_id' :</th><td>".$a_final_lo4."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF ASSIGNMENT IN <span style='color: red'>CO5 </span> OF '$course_id' :</th><td>".$a_final_lo5."</td></tr>";
                                echo "<tr><th>ATTAINMENT LEVEL OF ASSIGNMENT IN <span style='color: red'>CO6 </span> OF '$course_id' :</th><td>".$a_final_lo6."</td></tr>";


                                
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