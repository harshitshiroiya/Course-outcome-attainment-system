 <?php
include 'login_config.php';
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$courseid=$_SESSION['course_id'];
$flag=$_SESSION["flag"];

$exp="";
$A1_1=$A1_2=$A1_3=$A1_4=$A1_5=$A1_total=$A2_1=$A2_2=$A2_3=$A2_4=$A2_5=$A2_total=null;
$student_name=$std_id=$std_roll_no=$batch=$sem_id=null;
if(isset($_POST['A1_1']))
{
	$A1_1=$_POST['A1_1'];
	$asg.="`A1_1`";
} 
if(isset($_POST['A1_2']))
{
	$A1_2=$_POST['A1_2'];
	$asg.="`A1_2`";
} 
if(isset($_POST['A1_3']))
{
	$A1_3=$_POST['A1_3'];
	$asg.="`A1_3`";
} 
if(isset($_POST['A1_4']))
{
	$A1_4=$_POST['A1_4'];
	$asg.="`A1_4`";
} 
if(isset($_POST['A1_5']))
{
	$A1_5=$_POST['A1_5'];
	$asg.="`A1_5`";
} 
if(isset($_POST['A1_total']))
{
	$A1_total=$_POST['A1_total'];
	$asg.="`A1_total`";
} 
if(isset($_POST['A2_1']))
{
	$A2_1=$_POST['A2_1'];
	$asg.="`A2_1`";
} 
if(isset($_POST['A2_2']))
{
	$A2_2=$_POST['A2_2'];
	$asg.="`A2_2`";
} 
if(isset($_POST['A2_3']))
{
	$A2_3=$_POST['A2_3'];
	$asg.="`A2_3`";
} 
if(isset($_POST['A2_4']))
{
	$A2_4=$_POST['A2_4'];
	$asg.="`A2_4`";
} 
if(isset($_POST['A2_5']))
{
	$A2_5=$_POST['A2_5'];
	$asg.="`A2_5`";
} 
if(isset($_POST['A2_total']))
{
	$A2_total=$_POST['A2_total'];
	$asg.="`A2_total`";
} 





if(isset($_POST['student_name']))
{
	$student_name=$_POST['student_name'];
	$exp.="`student_name`";
} 
if(isset($_POST['std_id']))
{
	$std_id=$_POST['std_id'];
	$exp.=",`std_id`";
}
if(isset($_POST['sem_id']))
{
	$sem_id=$_POST['sem_id'];
	$exp.=",`sem_id`";
}
if(isset($_POST['std_roll_no']))
{
	$std_roll_no=$_POST['std_roll_no'];
	$exp.=",`std_roll_no`";
}
if(isset($_POST['batch']))
{
	$batch=$_POST['batch'];
	$exp.=",`batch`";
}



$sql="";
for(  $key = 0; $key<=sizeof($std_roll_no)-1; $key++ ) 
{
		$sql.="INSERT INTO `marks_assignment` (`course_id`, `sem_id`, `std_roll_no`, `std_id`, `student_name`, `batch`, `A1_1`, `A1_2`, `A1_3`, `A1_4`, `A1_5`, `A1_total`, `A2_1`, `A2_2`, `A2_3`, `A2_4`, `A2_5`, `A2_total`, `term`) VALUES ('$courseid', '$sem_id[$key]', '$std_roll_no[$key]', '$std_id[$key]', '$student_name[$key]', '$batch[$key]', '$A1_1[$key]', '$A1_2[$key]', '$A1_3[$key]', '$A1_4[$key]', '$A1_5[$key]', '$A1_total[$key]','$A2_1[$key]','$A2_2[$key]', '$A2_3[$key]', '$A2_4[$key]', '$A2_5[$key]', '$A2_total[$key]','$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: marks_assignment.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: marks_assignment.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 