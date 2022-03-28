 <?php
session_start();
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
include_once('db_connect.php');
$po_file_url="";
$old_agp=0;
$new_agp=0;
$old_desig="";
$new_desig="";
$wef_date=$_POST["cas_date"];
$cas_type=$_POST["cas_type"];
if($cas_type == "AGP")
{
	$old_agp=$_POST["old_agp"];
	$new_agp=$_POST["new_agp"];
}
else if($cas_type == "Promotion")
{
	$old_desig=$_POST["old_desig"];
	$new_desig=$_POST["new_desig"];
}
$letter_no=$_POST["cas_no"];
//echo $app_type;
$target_dir = "cas_letters/";
$target_file="";
$doc_id=uniqid('sakec');
if($cas_type == "AGP")
{
	$target_file=$target_dir.$emp_code."_AGP_".$old_agp."_".$new_agp.".pdf";
}else if($cas_type == "Promotion")
{
	$target_file=$target_dir.$emp_code."_AGP_".$old_desig."_".$new_desig.".pdf";
}
	
//echo $target_file;
//$target_file = $target_dir . basename($_FILES["appointment_file"]["name"]);
//echo $target_file;
$uploadOk = 1;
$messege ="";
$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["cas_file"]["size"] > 10000000) {
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
	if (move_uploaded_file($_FILES["cas_file"]["tmp_name"], $target_file)) {
		   $po_file_url=$target_file;
		} else {
		   $messege=$messege." "."Sorry, there was an error uploading your file.";
			//header("Location: pre_dform.php?message=".$messege);
		}
	}

if($cas_type == "AGP")
{	
	$sql = "INSERT INTO `agp_transition`(`e_no`, `emailid`, `doc_id`, `old_agp`, `new_agp`, `wef_date`, `letter_no`, `file_url`) VALUES ('$emp_code','$email','$doc_id','$old_agp','$new_agp','$wef_date','$letter_no','$po_file_url')";
}else if($cas_type == "Promotion")
{
	$sql = "INSERT INTO `promotion`(`e_no`, `emailid`, `doc_id`, `old_designation`, `new_designation`, `wef_date`, `letter_no`, `file_url`) VALUES ('$emp_code','$email','$doc_id','$old_desig','$new_desig','$wef_date','$letter_no','$po_file_url')";
}

echo $sql;
if (mysqli_query($conn, $sql)) {
header("Location: cas_details.php"); /* Redirect browser */
exit();
} else {
	header("Location: cas_details.php?message=".$messege); /* Redirect browser*/
	exit();
}






mysqli_close($conn);
?> 