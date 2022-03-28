 <?php
session_start();
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
include_once('db_connect.php');
$po_file_url="";
$app_type=$_POST["app_type"];
$ten_start=$_POST["ten_start"];
$ten_end=$_POST["ten_end"];
$app_no=$_POST["app_no"];
//echo $app_type;
$target_dir = "appointment_letters/";
$target_file="";
$doc_id=uniqid('sakec');
if($app_type=="Regular")
{
	$time=strtotime($ten_start);
	$ten_end='0000-00-00';
	//echo "TenEnd".$ten_end;
	$month=date("F",$time);
	$year=date("Y",$time);
	$target_file=$target_dir.$emp_code."_Regular_".$month.$year.".pdf";
}else if($app_type=="Adhoc")
{
	$time1=strtotime($ten_start);
	$time2=strtotime($ten_end);
	$month1=date("F",$time1);
	$year1=date("Y",$time1);
	$month2=date("F",$time2);
	$year2=date("Y",$time2);
	$target_file=$target_dir.$emp_code."_Adhoc_".$month1.$year1."_".$month2.$year2.".pdf";
}
	
//echo $target_file;
//$target_file = $target_dir . basename($_FILES["appointment_file"]["name"]);
//echo $target_file;
$uploadOk = 1;
$messege ="";
$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["appointment_file"]["size"] > 10000000) {
    $messege=$messege. " " ."Sorry, your file is too large. Size must be less that 5 MB."." ".$_FILES["po_file"]["size"];
    $uploadOk = 0;
}
// Allow certain file formats
if($pdfFileType != "pdf" && $pdfFileType != "PDF") {
   $messege=$messege. " " ."Sorry, only PDF files are allowed.".$pdfFileType;
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $messege=$messege." "."Sorry, your file was not uploaded.";
	//header("Location: pre_dform.php?message=".$messege);
// if everything is ok, try to upload file
} else
{
	if (move_uploaded_file($_FILES["appointment_file"]["tmp_name"], $target_file)) {
		   $po_file_url=$target_file;
		} else {
		   $messege=$messege." "."Sorry, there was an error uploading your file.";
			//header("Location: pre_dform.php?message=".$messege);
		}
	}

if($app_type=="Regular")
{	
	$sql = "INSERT INTO `appointment_details`(`e_no`, `emailid`,`doc_id`,`appointment_type`, `tsd`, `letter_number`, `file_url`) VALUES ('$emp_code','$email','$doc_id','$app_type','$ten_start','$app_no','$po_file_url')";
}else if($app_type=="Adhoc")
{
	$sql = "INSERT INTO `appointment_details`(`e_no`, `emailid`,`doc_id`,`appointment_type`, `tsd`, `ted`, `letter_number`, `file_url`) VALUES ('$emp_code','$email','$doc_id','$app_type','$ten_start','$ten_end','$app_no','$po_file_url')";
}

echo $sql;
if (mysqli_query($conn, $sql)) {
header("Location: appointment_details.php"); /* Redirect browser */
exit();
} else {
	//header("Location: appointment_details.php?message=".$messege); /* Redirect browser */
	exit();
}






mysqli_close($conn);
?> 