 <?php
include 'login_config.php';
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$courseid=$_SESSION['course_id'];
$flag=$_SESSION["flag"];

$mp="";
$miniproject=null;
$student_name=$std_id=$std_roll_no=$batch=$sem_id=null;
if(isset($_POST['miniproject']))
{
	$miniproject=$_POST['miniproject'];
	$mp.="`miniproject`";
}







if(isset($_POST['student_name']))
{
	$student_name=$_POST['student_name'];
	$mp.="`student_name`";
} 
if(isset($_POST['std_id']))
{
	$std_id=$_POST['std_id'];
	$mp.=",`std_id`";
}
if(isset($_POST['sem_id']))
{
	$sem_id=$_POST['sem_id'];
	$mp.=",`sem_id`";
}
if(isset($_POST['std_roll_no']))
{
	$std_roll_no=$_POST['std_roll_no'];
	$mp.=",`std_roll_no`";
}
if(isset($_POST['batch']))
{
	$batch=$_POST['batch'];
	$mp.=",`batch`";
}



$sql="";
for(  $key = 0; $key<=sizeof($std_roll_no)-1; $key++ ) 
{
		$sql.="INSERT INTO `marks_miniproject` (`course_id`, `sem_id`, `std_roll_no`, `std_id`, `student_name`, `batch`, `miniproject`,`term`) VALUES ('$courseid', '$sem_id[$key]', '$std_roll_no[$key]', '$std_id[$key]', '$student_name[$key]', '$batch[$key]', '$miniproject[$key]','$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: marks_miniproject.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: marks_miniproject.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 