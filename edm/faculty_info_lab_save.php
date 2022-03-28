 <?php
include 'login_config.php';
session_start();
$term=$_SESSION['term'];
$course_tchr=$_POST['course_tchr'];
$course_class=$_POST['course_class'];
$batch=$_POST['batch'];
$roll_no_from=$_POST['roll_no_from'];
$roll_no_to=$_POST['roll_no_to'];

$course_id=$_SESSION['course_id'];
$trans_id=uniqid('sakec',true);

$sql="INSERT INTO `faculty_info_lab` VALUES ('$trans_id','$course_id','$course_tchr','$course_class','$batch','$roll_no_from','$roll_no_to','$term')";

//echo $sql;

if (mysqli_multi_query($conn, $sql))
{
	header("Location: faculty_info_lab.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: faculty_info_lab.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 