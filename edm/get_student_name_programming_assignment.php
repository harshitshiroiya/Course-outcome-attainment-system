<?php
include 'login_config.php';
$class=$_GET['class'];
$batch=$_GET['batch'];
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$courseid=$_SESSION['course_id'];
$flag=$_SESSION["flag"];
$student=array();
//$intake=array();

//echo "<script>alert('$class');</script>";
    if ($flag == 0) {
        $intake_qry="SELECT * FROM `intake` WHERE mod(sem_id,2) = 0 and division='$class'";

     }
    else{
        $intake_qry="SELECT * FROM `intake` WHERE mod(sem_id,2) != 0 and division='$class'";    
    }
    $intake_result = mysqli_query($conn,$intake_qry);
    if (mysqli_num_rows($intake_result) > 0)
    {
      //$fieldinfo = $intake_result -> fetch_fields();
      // foreach ($fieldinfo as $val) {
      //     $intake[]=$val -> value;                             
      // }
    	while($intake_row = mysqli_fetch_assoc($intake_result))
       {
                          
         $intake=$intake_row['sem_id'];
       }	
    } 
    //echo implode($intake, ',');
$programming_assignment=array( 'programming assignment');
$student_qry="SELECT `division_details`.`std_id`,`student_name`,`std_roll_no`,`batch`,`sem_id` FROM `division_details` JOIN `student_table` WHERE `division_details`.`std_id`=`student_table`.`std_id` AND `division_details`.`batch`='$batch' AND `division_details`.`sem_id`='$intake'";                
$student_result = mysqli_query($conn,$student_qry);
$count_qry = "SELECT * FROM `marks_programming_assignment` WHERE `batch`='$batch' AND `sem_id`='$intake' AND `course_id`='$courseid'";
$count_result = mysqli_query($conn,$count_qry);


//echo "<div class='form-three widget-shadow'>";
echo "<div class='panel-body-inputin'>";

echo "<form action='marks_programming_assignment_save.php' class='form-horizontal' enctype='multipart/form-data' method='POST'>";
echo "<div class='form-group'>";
echo "<table class='table table-bordered' >";
echo "<thead>";    
    //echo "<script>alert('$intake');</script>";
    echo "<th>Roll No.</th> <th>Student Name</th>";
    
    for($y=0;$y<sizeof($programming_assignment);$y++)
          {
            echo "<th>".$programming_assignment[$y]."</th>";
          }

echo "</thead>";
 
echo "<tbody>";

//    echo $intake_query;
	

    if (mysqli_num_rows($count_result) > 0) 
    {
       while($student_row = mysqli_fetch_assoc($student_result))
       {
                          
         //$student[]=$student_row;
        echo "<tr class='table_row'>";
    echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='std_roll_no[]' class='form-control1' value=".$student_row['std_roll_no']." readonly></div></div></div></td>";
    echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='student_name[]' class='form-control1' value=".$student_row['student_name']." readonly></div></div></div></td>";
    for($y=0;$y<sizeof($programming_assignment);$y++)
              {
                echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='number' name='".$programming_assignment[$y]."[]' class='form-control1' value=0 max='20' min='0' readonly oninput='validity.valid || (value=0);'></div></div></div></td>";
              }
         // echo "<thead><th>".$student_row['std_roll_no']."</th></thead>";
         // echo "<thead><th>".$student_row['student_name']."</th></thead>";
       }
    }

else
{

  if (mysqli_num_rows($student_result) > 0) 
    {
       while($student_row = mysqli_fetch_assoc($student_result))
       {
                          
         //$student[]=$student_row;
        echo "<tr class='table_row'>";
        echo "<input type='hidden' name='std_id[]' class='form-control1' value=".$student_row['std_id']." >";
        echo "<input type='hidden' name='batch[]' class='form-control1' value=".$student_row['batch']." >";
        echo "<input type='hidden' name='sem_id[]' class='form-control1' value=".$student_row['sem_id']." >";
        echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='std_roll_no[]' class='form-control1' value=".$student_row['std_roll_no']." readonly></div></div></div></td>";
        echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='text' name='student_name[]' style='width:80px' class='form-control1' value=".$student_row['student_name']." readonly></div></div></div></td>";
    for($y=0;$y<sizeof($programming_assignment);$y++)
              {
                echo "<td><div class='form-group'><div class='col-md-10'><div class='input-group'><input type='number' name='".$programming_assignment[$y]."[]' class='form-control1' value=0 max='20' min='0'  oninput='validity.valid || (value=0);'></div></div></div></td>";
              }
         
       }
    }

}




echo "</tbody>";
echo "</table>";


echo "<center><button type='reset' class='btn btn-default'> Reset</button><button type='submit' class='btn btn-warning'>Save</button></center>";
echo "</div></div>";
echo "</form>";


exit();



?>