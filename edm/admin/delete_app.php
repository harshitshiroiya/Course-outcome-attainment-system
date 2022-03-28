<?php
//$app_no="sakec5c8e2968cd5dc";
$app_no=$_GET["doc_id"];
$email=$_SESSION["email"];
$e_id=$_SESSION['e_id'];
session_start();
include_once('db_connect.php');
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
$sql = "DELETE FROM `appointment_details` WHERE (`e_no`='$e_id' or `emailid`='$email') and `doc_id`='$app_no'";
mysqli_query($conn, $sql);

$qry="SELECT * FROM `appointment_details` WHERE e_no='$e_id' or emailid='$email'";
$result = mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if(date("d/m/Y", strtotime($row['ted']))=="01/01/1970")
		{
			$ted="-";
		}
		else
		{
			$ted=date("d/m/Y", strtotime($row['ted']));
		}
		echo "<tr><td>".$row['appointment_type']."</td><td>".date("d/m/Y", strtotime($row['tsd']))."</td><td>".$ted."</td><td>".$row['letter_number']."</td><td><a target='_blank' href=".$row['file_url'].">View</a></td><td><button type='button' class='btn btn-danger' onclick=deleteLetter('".$row['doc_id']."')>X</button></td></tr>";
	}
}
exit();

?>