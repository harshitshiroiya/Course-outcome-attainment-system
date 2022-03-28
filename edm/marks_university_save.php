 <?php
include 'login_config.php';
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$courseid=$_SESSION['course_id'];
$flag=$_SESSION["flag"];

$university="";
$theory=$practical=null;
$student_name=$std_id=$std_roll_no=$sem_id=null;
if(isset($_POST['theory']))
{
	$theory=$_POST['theory'];
	$university.="`theory`";
}
if(isset($_POST['practical']))
{
	$practical=$_POST['practical'];
	$university.="`practical`";
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




$sql="";
for(  $key = 0; $key<=sizeof($std_roll_no)-1; $key++ ) 
{
		$sql.="INSERT INTO `marks_university` (`course_id`, `sem_id`, `std_roll_no`, `std_id`, `student_name`, `theory`,`practical`,`term`) VALUES ('$courseid', '$sem_id[$key]', '$std_roll_no[$key]', '$std_id[$key]', '$student_name[$key]', '$theory[$key]', '$practical[$key]','$term');";
}
		

if (mysqli_multi_query($conn, $sql))
{
	header("Location: marks_university.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: marks_university.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 