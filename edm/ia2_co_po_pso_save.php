<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$IA2="";
$IA2_q=$marks=$b=$co=$pso=$pi_no=null;

if(isset($_POST['IA2_q']))
{
	$IA2_q=$_POST['IA2_q'];
	$IA2.="`IA2_q`";
} 
if(isset($_POST['marks']))
{
	$marks=$_POST['marks'];
	$IA2.=",`marks`";
}
if(isset($_POST['b']))
{
	$b=$_POST['b'];
	$IA2.=",`b`";
}
if(isset($_POST['co']))
{
	$co=$_POST['co'];
	$IA2.=",`co`";
}
if(isset($_POST['pso']))
{
	$pso=$_POST['pso'];
	$IA2.=",`pso`";
}
if(isset($_POST['pi_no']))
{
	$pi_no=$_POST['pi_no'];
	$IA2.=",`pi_no`";
}
// echo(sizeof($pso));
// echo $IA2;
// echo '<br>';
// echo implode(',',$IA2_q);
// echo '<br>';
// echo implode(',',$marks);
// echo '<br>';
// echo implode(',',$b);
// echo '<br>';
// echo implode(',',$co);
// echo '<br>';
 
// echo '<br>';
// echo implode(',',$pi_no);

$co_id_array=array();
for($a=0;$a<sizeof($co);$a++){
$qry="SELECT * FROM `co_list` WHERE `co_no` LIKE '$co[$a]'";
if($co_res=mysqli_query($conn, $qry)){
	$row=mysqli_fetch_assoc($co_res);
	$co_id_array[] =$row['co_id'];	
}
}

//  echo '<br>';
//  echo '<br>';
// echo implode(',',$co_id_array);

$sql="";
foreach( $IA2_q as $key => $n ) 
{
		$sql.="INSERT INTO `ia2_co_pso_pi`(`co_id`, `course_id`, `ia_questions`, `marks`, `bl_level`, `co_no`, `pso`, `pi_po`, `term`) VALUES('$co_id_array[$key]','$course_id','$n','$marks[$key]','$b[$key]','$co[$key]','$pso[$key]','$pi_no[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: ia2_co_po_pso.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: ia2_co_po_pso.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 