<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$exit="";
$questions=$lo=null;

if(isset($_POST['questions']))
{
	$questions=$_POST['questions'];
	$exit.="`questions`";
} 

if(isset($_POST['lo']))
{
	$lo=$_POST['lo'];
	$exit.=",`lo`";
}

// echo(sizeof($pso));
// echo $IA1;
// echo '<br>';
// echo implode(',',$IA1_q);
// echo '<br>';
// echo implode(',',$marks);
// echo '<br>'; 
// echo implode(',',$b);
// echo '<br>';
// echo implode(',',$co);
// echo '<br>';
 
// echo '<br>';
// echo implode(',',$pi_no);

$lo_id_array=array();
for($a=0;$a<sizeof($lo);$a++){
$qry="SELECT * FROM `lo_list` WHERE `lo_no` LIKE '$lo[$a]' AND `course_id` LIKE '$course_id'";
if($lo_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($lo_res);
	$lo_id_array[] =$row['lo_id'];	
}
}
// echo '<br>';
// echo '<br>';
// echo implode(',',$questions);

for($key=0;$key<12;$key++) 
{
		$sql.="INSERT INTO `lab_exit`( `course_id`,`question_no`, `questions`, `lo_no`,`lo_id`, `term`) VALUES('$course_id',$key+1,'$questions[$key]','$lo[$key]','$lo_id_array[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: lo_exit.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: lo_exit.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 