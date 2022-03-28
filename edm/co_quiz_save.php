 <?php
include 'login_config.php';
session_start();
$co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];


$quiz="";
$quiz1=$quiz2=$quiz3=$quiz4=$quiz5=null;
if(isset($_POST['quiz1']))
{
	$quiz1=$_POST['quiz1'];
	$quiz.="`quiz1`";
} 
if(isset($_POST['quiz2']))
{
	$quiz2=$_POST['quiz2'];
	$quiz.=",`quiz2`";
}
if(isset($_POST['quiz3']))
{
	$quiz3=$_POST['quiz3'];
	$quiz.=",`quiz3`";
}
if(isset($_POST['quiz4']))
{
	$quiz4=$_POST['quiz4'];
	$quiz.=",`quiz4`";
}
if(isset($_POST['quiz5']))
{
	$quiz5=$_POST['quiz5'];
	$quiz.=",`quiz5`";
}

// echo $am;


$sql="";
foreach( $co_id as $key => $n ) 
{
		$sql.="INSERT INTO `quiz_co`(`co_id`, `course_id`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `quiz5`, `total`, `term`) VALUES('$n','$course_id','$quiz1[$key]','$quiz2[$key]','$quiz3[$key]','$quiz4[$key]','$quiz5[$key]',100,'$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: quiz_mapping.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: quiz_mapping.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 