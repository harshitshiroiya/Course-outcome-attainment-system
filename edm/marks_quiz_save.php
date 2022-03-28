 <?php
include 'login_config.php';
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$courseid=$_SESSION['course_id'];
$flag=$_SESSION["flag"];

$quiz="";
$quiz1=$quiz2=$quiz3=$quiz4=$quiz5=null;
$student_name=$std_id=$std_roll_no=$batch=$sem_id=null;
if(isset($_POST['quiz1']))
{
	$quiz1=$_POST['quiz1'];
	$quiz.="`quiz1`";
}
if(isset($_POST['quiz2']))
{
	$quiz2=$_POST['quiz2'];
	$quiz.="`quiz2`";
}
if(isset($_POST['quiz3']))
{
	$quiz3=$_POST['quiz3'];
	$quiz.="`quiz3`";
}
if(isset($_POST['quiz4']))
{
	$quiz4=$_POST['quiz4'];
	$quiz.="`quiz4`";
}
if(isset($_POST['quiz5']))
{
	$quiz5=$_POST['quiz5'];
	$quiz.="`quiz5`";
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
		$sql.="INSERT INTO `marks_quiz` (`course_id`, `sem_id`, `std_roll_no`, `std_id`, `student_name`, `batch`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `quiz5`, `term`) VALUES ('$courseid', '$sem_id[$key]', '$std_roll_no[$key]', '$std_id[$key]', '$student_name[$key]', '$batch[$key]', '$quiz1[$key]', '$quiz2[$key]', '$quiz3[$key]', '$quiz4[$key]', '$quiz5[$key]','$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: marks_quiz.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: marks_quiz.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 