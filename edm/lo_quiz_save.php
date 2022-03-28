 <?php
include 'login_config.php';
session_start();
$lo_id=$_POST['lo_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];


$quiz="";
$quiz_1=$quiz_2=$quiz_3=$quiz_4=$quiz_5=null;
if(isset($_POST['quiz_1']))
{
	$quiz_1=$_POST['quiz_1'];
	$quiz.="`quiz_1`";
} 
if(isset($_POST['quiz_2']))
{
	$quiz_2=$_POST['quiz_2'];
	$quiz.=",`quiz_2`";
}
if(isset($_POST['quiz_3']))
{
	$quiz_3=$_POST['quiz_3'];
	$quiz.=",`quiz_3`";
}
if(isset($_POST['quiz_4']))
{
	$quiz_4=$_POST['quiz_4'];
	$quiz.=",`quiz_4`";
}
if(isset($_POST['quiz_5']))
{
	$quiz_5=$_POST['quiz_5'];
	$quiz.=",`quiz_5`";
}

// echo $am;


$sql="";
foreach( $lo_id as $key => $n ) 
{
		$sql.="INSERT INTO `quiz_lo`(`lo_id`, `course_id`, `quiz_1`, `quiz_2`, `quiz_3`, `quiz_4`, `quiz_5`, `total`, `term`) VALUES('$n','$course_id','$quiz_1[$key]','$quiz_2[$key]','$quiz_3[$key]','$quiz_4[$key]','$quiz_5[$key]',100,'$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: lo_quiz_mapping.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: lo_quiz_mapping.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 