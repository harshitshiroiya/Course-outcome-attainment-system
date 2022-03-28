<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$gap="";
$category=$details=$exp_no=$reason=$no_hours=$co=$po=null;


if(isset($_POST['category']))
{
	$category=$_POST['category'];
	$gap.="`category`";
}
if(isset($_POST['details']))
{
	$details=$_POST['details'];
	$gap.="`details`";
}
if(isset($_POST['exp_no']))
{
	$exp_no=$_POST['exp_no'];
	$gap.="`exp_no`";
}
if(isset($_POST['reason']))
{
	$reason=$_POST['reason'];
	$gap.="`reason`";
} 
if(isset($_POST['no_hours']))
{
	$no_hours=$_POST['no_hours'];
	$gap.="`no_hours`";
} 
if(isset($_POST['co']))
{
	$co=$_POST['co'];
	$gap.=",`co`";
}

if(isset($_POST['po']))
{
	$po=$_POST['po'];
	$gap.="`po`";
} 

$co_id_array=array();
for($a=0;$a<sizeof($co);$a++){
$qry="SELECT * FROM `co_list` WHERE `co_no` LIKE '$co[$a]' AND `course_id` LIKE '$course_id'";
if($co_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($co_res);
	$co_id_array[] =$row['co_id'];	
}
}

// echo '<br>';
// echo implode(',',$syll_module);
// echo '<br>';
// echo implode(',',$module_name);
// $sql.="INSERT INTO `gap_identifiacation`( `course_id`,`co_id`,`sr_no`,`module_no`,`module_name`,`gap_identification`,`co_no`,`po`,`term`) VALUES('$course_id','$co_id_array[$key]',$key+1,'$syll_module[$key]','$module_name[$key]','$gap_identification[$key]','$co[$key]','$po[$key]','$term');";
for($key=0;$key<5;$key++) 
{
    // $sql.="INSERT INTO `information_commtechnology` VALUES('$course_id','$co_id_array[$key]',$key+1,'$category[$key]','$details[$key]','$syll_module[$key]','$no_hours[$key]','$co[$key]','$po[$key]','$term');";
    $sql.="INSERT INTO `facility_mapping` VALUES('$course_id','$co_id_array[$key]',$key+1,'$category[$key]','$details[$key]','$exp_no[$key]','$reason[$key]','$no_hours[$key]','$co[$key]','$po[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: facility_mapping_co.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: facility_mapping_co.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 