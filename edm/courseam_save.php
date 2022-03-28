 <?php
include 'login_config.php';
session_start();
$course_id=$_SESSION['course_id'];
$courseam=$_POST['am'];

//var_dump($courseam);

$sql="";
$no=count($courseam);
$i=1;
$amno="";
$amnm="";
foreach( $courseam as $key => $n ) 
{
	$amno.="`".$n."`";
	$amnm.="'".$_POST[$n]."'";
	if($i<$no)
	{
		$amnm.=",";
		$amno.=",";
		$i++;
	}
}

$sql="INSERT INTO `course_am`(`course_id`,$amno) VALUE('$course_id',$amnm)";

//echo $sql;


if (mysqli_query($conn, $sql))
{
	header("Location: define_courseam.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: define_courseam.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 