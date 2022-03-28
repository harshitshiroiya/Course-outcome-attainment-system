<?php 

include 'login_config.php';
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$course_id=$_SESSION['course_id'];
$flag=$_SESSION["flag"];




////////////////////COPY FROM HERE (calc part)///////////////////////////////
$lo_id_qry="SELECT `assignment_lo`.`lo_id` FROM `assignment_lo` WHERE `course_id`='$course_id'";
$lo_id_result = mysqli_query($conn,$lo_id_qry);

  

// $sql= "Select `assignment_lo`.`lo_id`,`assignment_lo`.`course_id`, (`assignment_lo`.`A1_1`*`marks_assignment`.`A1_1`)/100 as a1_1_c,(`assignment_lo`.`A1_2`*`marks_assignment`.`A1_2`)/100 as a1_2_c,(`assignment_lo`.`A1_3`*`marks_assignment`.`A1_3`)/100 as a1_3_c,(`assignment_lo`.`A1_4`*`marks_assignment`.`A1_4`)/100 as a1_4_c,(`assignment_lo`.`A1_5`*`marks_assignment`.`A1_5`)/100 as a1_5_c,(`assignment_lo`.`A2_1`*`marks_assignment`.`A2_1`)/100 as a2_1_c,(`assignment_lo`.`A2_2`*`marks_assignment`.`A2_2`)/100 as a2_2_c,(`assignment_lo`.`A2_3`*`marks_assignment`.`A2_3`)/100 as a2_3_c,(`assignment_lo`.`A2_4`*`marks_assignment`.`A2_4`)/100 as a2_4_c,(`assignment_lo`.`A2_5`*`marks_assignment`.`A2_5`)/100 as a2_5_c, `marks_assignment`.`course_id`,`marks_assignment`.`std_id` FROM `assignment_lo`,`marks_assignment` WHERE `assignment_lo`.`course_id` = `marks_assignment`.`course_id` ";

// $sql= "Select `assignment_lo`.`lo_id`,`assignment_lo`.`course_id`, (`assignment_lo`.`A1_1`*`marks_assignment`.`A1_1`)/100 as a1_1_c, `marks_assignment`.`course_id`,`marks_assignment`.`std_id` FROM `assignment_lo`,`marks_assignment` WHERE `assignment_lo`.`course_id` = `marks_assignment`.`course_id`" ;



$sql100 ="SELECT count(*) as ts FROM `marks_assignment` WHERE `A1_1` > '0' ";

$sql60 ="SELECT count(CASE WHEN `A1_1` >= '3' THEN 1 END ) as a1 ,count(CASE WHEN `A1_2` >= '3' THEN 1 END) as a2 , count(CASE WHEN `A1_3` >= '3' THEN 1 END )as a3,count(CASE WHEN `A1_4` >= '3' THEN 1 END )as a4 ,count(CASE WHEN `A1_5` >= '3' THEN 1 END) as a5, count(CASE WHEN `A2_1` >= '3' THEN 1 END )as a6,count(CASE WHEN `A2_2` >= '3' THEN 1 END )as a7 ,count(CASE WHEN `A2_3` >= '3' THEN 1 END)as a8 , count(CASE WHEN `A2_4` >= '3' THEN 1 END )as a9,count(CASE WHEN `A2_5` >= '3' THEN 1 END )as a10   FROM `marks_assignment`";
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




//LO1
$sql_lo1="SELECT `A1_1` as aw1,`A1_2`as aw2,`A1_3`as aw3,`A1_4`as aw4,`A1_5`as aw5,`A2_1`as aw6,`A2_2`as aw7,`A2_3`as aw8,`A2_4`as aw9,`A2_5`as aw10 FROM `assignment_lo` WHERE `lo_id`='ITL301.1'";
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
                       
}
$a_final_lo1 = number_format(($a1c1*$w1 + $a2c1*$w2 + $a3c1*$w3 + $a4c1*$w4 + $a5c1*$w5 + $a6c1*$w6 + $a7c1*$w7 + $a8c1*$w8 + $a9c1*$w9 + $a10c1*$w10)/100,2);

//echo $a_final_lo1;
;
//LO2
$sql_lo2="SELECT `A1_1` as aw1,`A1_2`as aw2,`A1_3`as aw3,`A1_4`as aw4,`A1_5`as aw5,`A2_1`as aw6,`A2_2`as aw7,`A2_3`as aw8,`A2_4`as aw9,`A2_5`as aw10 FROM `assignment_lo` WHERE `lo_id`='ITL301.2'";
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
                       
}
$a_final_lo2 = number_format(($a1c1*$w21 + $a2c1*$w22 + $a3c1*$w23 + $a4c1*$w24 + $a5c1*$w25 + $a6c1*$w26 + $a7c1*$w27 + $a8c1*$w28 + $a9c1*$w29 + $a10c1*$w210)/100,2);

// echo $a_final_lo2;

//LO3
$sql_lo3="SELECT `A1_1` as aw1,`A1_2`as aw2,`A1_3`as aw3,`A1_4`as aw4,`A1_5`as aw5,`A2_1`as aw6,`A2_2`as aw7,`A2_3`as aw8,`A2_4`as aw9,`A2_5`as aw10 FROM `assignment_lo` WHERE `lo_id`='ITL301.3'";
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
                       
}
$a_final_lo3 = number_format(($a1c1*$w31 + $a2c1*$w32 + $a3c1*$w33 + $a4c1*$w34 + $a5c1*$w35 + $a6c1*$w36 + $a7c1*$w37 + $a8c1*$w38 + $a9c1*$w39 + $a10c1*$w310)/100,2);

//echo $a_final_lo3;

//LO4
$sql_lo4="SELECT `A1_1` as aw1,`A1_2`as aw2,`A1_3`as aw3,`A1_4`as aw4,`A1_5`as aw5,`A2_1`as aw6,`A2_2`as aw7,`A2_3`as aw8,`A2_4`as aw9,`A2_5`as aw10 FROM `assignment_lo` WHERE `lo_id`='ITL301.4'";
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
                       
}
$a_final_lo4 = number_format(($a1c1*$w41 + $a2c1*$w42 + $a3c1*$w43 + $a4c1*$w44 + $a5c1*$w45 + $a6c1*$w46 + $a7c1*$w47 + $a8c1*$w48 + $a9c1*$w49 + $a10c1*$w410)/100,2);

//echo $a_final_lo4;

//LO5

$sql_lo5="SELECT `A1_1` as aw1,`A1_2`as aw2,`A1_3`as aw3,`A1_4`as aw4,`A1_5`as aw5,`A2_1`as aw6,`A2_2`as aw7,`A2_3`as aw8,`A2_4`as aw9,`A2_5`as aw10 FROM `assignment_lo` WHERE `lo_id`='ITL301.5'";
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
                       
}
$a_final_lo5 = number_format(($a1c1*$w51 + $a2c1*$w52 + $a3c1*$w53 + $a4c1*$w54 + $a5c1*$w55 + $a6c1*$w56 + $a7c1*$w57 + $a8c1*$w58 + $a9c1*$w59 + $a10c1*$w510)/100,2);
echo $a_final_lo5;

//LO6

$sql_lo6="SELECT `A1_1` as aw1,`A1_2`as aw2,`A1_3`as aw3,`A1_4`as aw4,`A1_5`as aw5,`A2_1`as aw6,`A2_2`as aw7,`A2_3`as aw8,`A2_4`as aw9,`A2_5`as aw10 FROM `assignment_lo` WHERE `lo_id`='ITL301.6'";
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
                       
}
$a_final_lo6 = number_format(($a1c1*$w61 + $a2c1*$w62 + $a3c1*$w63 + $a4c1*$w64 + $a5c1*$w65 + $a6c1*$w66 + $a7c1*$w67 + $a8c1*$w68 + $a9c1*$w69 + $a10c1*$w610)/100,2);

echo $a_final_lo6;

/////////////////////////////////////////


// Free result set
$result -> free_result();


?>