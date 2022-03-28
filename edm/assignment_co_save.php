 <?php
include 'login_config.php';
session_start();
$co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];

$AS="";
$A1_1=$A1_2=$A1_3=$A1_4=$A1_5=$A2_1=$A2_2=$A2_3=$A2_4=$A2_5=null;

if(isset($_POST['A1_1']))
{
	$A1_1=$_POST['A1_1'];
	$AS.="`A1_1`";
} 
if(isset($_POST['A1_2']))
{
	$A1_2=$_POST['A1_2'];
	$AS.=",`A1_2`";
}
if(isset($_POST['A1_3']))
{
	$A1_3=$_POST['A1_3'];
	$AS.=",`A1_3`";
}
if(isset($_POST['A1_4']))
{
	$A1_4=$_POST['A1_4'];
	$AS.=",`A1_4`";
}
if(isset($_POST['A1_5']))
{
	$A1_5=$_POST['A1_5'];
	$AS.=",`A1_5`";
}
if(isset($_POST['A2_1']))
{
	$A2_1=$_POST['A2_1'];
	$AS.=",`A2_1`";
}
if(isset($_POST['A2_2']))
{
	$A2_2=$_POST['A2_2'];
	$AS.=",`A2_2`";
}
if(isset($_POST['A2_3']))
{
	$A2_3=$_POST['A2_3'];
	$AS.=",`A2_3`";
}
if(isset($_POST['A2_4']))
{
	$A2_4=$_POST['A2_4'];
	$AS.=",`A2_4`";
}
if(isset($_POST['A2_5']))
{
	$A2_5=$_POST['A2_5'];
	$AS.=",`A2_5`";
}





$sql="";
foreach( $co_id as $key => $n ) 
{
		$sql.="INSERT INTO `assignment_co`( `course_id`,`co_id`,`A1_1`,`A1_2`,`A1_3`,`A1_4`,`A1_5`,`A2_1`, `A2_2`, `A2_3`, `A2_4`,`A2_5`, `total`,`term`) VALUES('$course_id','$n','$A1_1[$key]','$A1_2[$key]','$A1_3[$key]','$A1_4[$key]','$A1_5[$key]','$A2_1[$key]','$A2_2[$key]','$A2_3[$key]', '$A2_4[$key]','$A2_5[$key]',100,'$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: assignment_mapping.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: assignment_mapping.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 