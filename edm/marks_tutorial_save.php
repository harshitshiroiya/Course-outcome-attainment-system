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
$tut1=$tut2=$tut3=$tut4=$tut5=$tut6=$tut7=$tut8=$tut9=$tut10=$tut11=$tut12=$tut13=$tut14=$tut15=null;
$student_name=$std_id=$std_roll_no=$batch=$sem_id=null;
if(isset($_POST['tut1']))
{
	$tut1=$_POST['tut1'];
	$exp.="`tut1`";
} 
if(isset($_POST['tut2']))
{
	$tut2=$_POST['tut2'];
	$exp.="`tut1`";
} 
if(isset($_POST['tut3']))
{
	$tut3=$_POST['tut3'];
	$exp.="`tut1`";
} 
if(isset($_POST['tut4']))
{
	$tut4=$_POST['tut4'];
	$exp.="`tut4`";
} 
if(isset($_POST['tut5']))
{
	$tut5=$_POST['tut5'];
	$exp.="`tut5`";
} 
if(isset($_POST['tut6']))
{
	$tut6=$_POST['tut6'];
	$exp.="`tut6`";
} 
if(isset($_POST['tut7']))
{
	$tut7=$_POST['tut7'];
	$exp.="`tut7`";
} 
if(isset($_POST['tut8']))
{
	$tut8=$_POST['tut8'];
	$exp.="`tut8`";
} 
if(isset($_POST['tut9']))
{
	$tut9=$_POST['tut9'];
	$exp.="`tut9`";
} 
if(isset($_POST['tut10']))
{
	$tut10=$_POST['tut10'];
	$exp.="`tut10`";
} 
if(isset($_POST['tut11']))
{
	$tut11=$_POST['tut11'];
	$exp.="`tut11`";
} 
if(isset($_POST['tut12']))
{
	$tut12=$_POST['tut12'];
	$exp.="`tut12`";
} 
if(isset($_POST['tut13']))
{
	$tut13=$_POST['tut13'];
	$exp.="`tut13`";
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
		$sql.="INSERT INTO `marks_tutorial` (`course_id`, `sem_id`, `std_roll_no`, `std_id`, `student_name`, `batch`, `tut1`, `tut2`, `tut3`, `tut4`, `tut5`, `tut6`, `tut7`, `tut8`, `tut9`, `tut10`, `tut11`, `tut12`, `tut13`, `term`) VALUES ('$courseid', '$sem_id[$key]', '$std_roll_no[$key]', '$std_id[$key]', '$student_name[$key]', '$batch[$key]', '$tut1[$key]', '$tut2[$key]', '$tut3[$key]', '$tut4[$key]', '$tut5[$key]', '$tut6[$key]', '$tut7[$key]', '$tut8[$key]', '$tut9[$key]', '$tut10[$key]', '$tut11[$key]', '$tut12[$key]', '$tut13[$key]','$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: marks_tutorial.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: marks_tutorial.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 