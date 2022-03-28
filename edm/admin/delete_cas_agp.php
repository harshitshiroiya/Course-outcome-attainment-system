<?php
//$app_no="sakec5c8e2968cd5dc";
$app_no=$_GET["doc_id"];
session_start();
include_once('db_connect.php');
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
$sql = "DELETE FROM `agp_transition` WHERE (`e_no`='$emp_code' or `emailid`='$email') and `doc_id`='$app_no'";
mysqli_query($conn, $sql);

$qry="SELECT * FROM `agp_transition` WHERE e_no='$emp_code' or emailid='$email'";
$result = mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$row['old_agp']."</td><td>".$row['new_agp']."</td><td>".date("d/m/Y", strtotime($row['wef_date']))."</td><td>".$row['letter_no']."</td><td><a target='_blank' href=".$row['file_url'].">View</a></td><td><button type='button' class='btn btn-danger' onclick=deleteLetter('".$row['doc_id']."')>X</button></td></tr>";
	}
}
exit();

?>