 <?php
include 'login_config.php';
session_start();
$lo_id=$_POST['lo_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];

$exp="";
$exp1=$exp2=$exp3=$exp4=$exp5=$exp6=$exp7=$exp8=$exp9=$exp10=$exp11=$exp12=$exp13=$exp14=$exp15=$exp16=$exp17=$exp18=$exp19=$exp20=null;

if(isset($_POST['exp1']))
{
	$exp1=$_POST['exp1'];
	$exp.="`exp1`";
} 
if(isset($_POST['exp2']))
{
	$exp2=$_POST['exp2'];
	$exp.=",`exp2`";
}
if(isset($_POST['exp3']))
{
	$exp3=$_POST['exp3'];
	$exp.=",`exp3`";
}
if(isset($_POST['exp4']))
{
	$exp4=$_POST['exp4'];
	$exp.=",`exp4`";
}
if(isset($_POST['exp5']))
{
	$exp5=$_POST['exp5'];
	$exp.=",`exp5`";
}
if(isset($_POST['exp6']))
{
	$exp6=$_POST['exp6'];
	$exp.="`exp6`";
} 
if(isset($_POST['exp7']))
{
	$exp7=$_POST['exp7'];
	$exp.=",`exp7`";
}
if(isset($_POST['exp8']))
{
	$exp8=$_POST['exp8'];
	$exp.=",`exp8`";
}
if(isset($_POST['exp9']))
{
	$exp9=$_POST['exp9'];
	$exp.=",`exp9`";
}
if(isset($_POST['exp10']))
{
	$exp10=$_POST['exp10'];
	$exp.=",`exp10`";
}
if(isset($_POST['exp11']))
{
	$exp11=$_POST['exp11'];
	$exp.="`exp11`";
} 
if(isset($_POST['exp12']))
{
	$exp12=$_POST['exp12'];
	$exp.=",`exp12`";
}
if(isset($_POST['exp13']))
{
	$exp13=$_POST['exp13'];
	$exp.=",`exp13`";
}
if(isset($_POST['exp14']))
{
	$exp14=$_POST['exp14'];
	$exp.=",`exp14`";
}
if(isset($_POST['exp15']))
{
	$exp15=$_POST['exp15'];
	$exp.=",`exp15`";
}
if(isset($_POST['exp16']))
{
	$exp16=$_POST['exp16'];
	$exp.="`exp16`";
} 
if(isset($_POST['exp17']))
{
	$exp17=$_POST['exp17'];
	$exp.=",`exp17`";
}
if(isset($_POST['exp18']))
{
	$exp18=$_POST['exp18'];
	$exp.=",`exp18`";
}
if(isset($_POST['exp19']))
{
	$exp19=$_POST['exp19'];
	$exp.=",`exp19`";
}
if(isset($_POST['exp20']))
{
	$exp20=$_POST['exp20'];
	$exp.=",`exp20`";
}





$sql="";
foreach( $lo_id as $key => $n ) 
{
		$sql.="INSERT INTO `experiment_lo`( `lo_id`,`course_id`,`exp1`,`exp2`,`exp3`,`exp4`,`exp5`,`exp6`, `exp7`,`exp8`, `exp9`,`exp10`,`exp11`,`exp12`,`exp13`,`exp14`,`exp15`,`exp16`, `exp17`,`exp18`, `exp19`,`exp20`, `total`,`term`) VALUES('$n','$course_id','$exp1[$key]','$exp2[$key]','$exp3[$key]','$exp4[$key]','$exp5[$key]','$exp6[$key]','$exp7[$key]','$exp8[$key]', '$exp9[$key]','$exp10[$key]','$exp11[$key]','$exp12[$key]','$exp13[$key]','$exp14[$key]','$exp15[$key]','$exp16[$key]','$exp17[$key]','$exp18[$key]', '$exp19[$key]','$exp20[$key]',100,'$term');";

		// echo ("INSERT INTO `ia_am`( `course_id`,`co_id`,`IA1_1a`,`IA1_1b`,`IA1_1c`,`IA1_1d`,`IA1_1e`,`IA1_1f`, `IA1_2a`, `IA1_2b`, `IA1_3a`,`IA1_3b`,`IA2_1a`,`IA2_1b`,`IA2_1c`,`IA2_1d`,`IA2_1e`,`IA2_1f`, `IA2_2a`, `IA2_2b`, `IA2_3a`,`IA2_3b`, `term`) VALUES('$course_id','$n','$IA1_1a[$key]','$IA1_1b[$key]','$IA1_1c[$key]','$IA1_1d[$key]','$IA1_1e[$key]','$IA1_1f[$key]','$IA1_2a[$key]','$IA1_2b[$key]', '$IA1_3a[$key]','$IA1_3b[$key]','$IA2_1a[$key]','$IA2_1b[$key]','$IA2_1c[$key]','$IA2_1d[$key]','$IA2_1e[$key]','$IA2_1f[$key]','$IA2_2a[$key]','$IA2_2b[$key]', '$IA2_3a[$key]','$IA2_3b[$key]','$term');");
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: experiment_lo.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: experiment_lo.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 