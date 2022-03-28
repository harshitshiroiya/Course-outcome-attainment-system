<?php
include 'login_config.php';
$class=$_GET['class'];
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$courseid=$_SESSION['course_id'];
$batch=array();
//echo "<script> alert(abc); </script>";
 $batch_qry="Select `batch` from `faculty_info_lab` where `course_id`='$courseid' and `tchr_id`='$tchr_id' and `term`='$term' and `class_code`='$class'";

$batch_result = mysqli_query($conn,$batch_qry);

    if (mysqli_num_rows($batch_result) > 0) 
    {
       while($batch_row = mysqli_fetch_assoc($batch_result))
       {
                          
         $batch[]=implode($batch_row, "-");
       }
    }

 echo "<option value=''>Select</option>";
 foreach (array_unique($batch) as $b) {
     echo "<option value='$b'>$b</option>";
    }


exit();
?>