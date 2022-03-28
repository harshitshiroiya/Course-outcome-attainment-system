<?php
//$app_no="789456";
$doc_id=$_GET["doc_id"];

session_start();
include_once('db_connect.php');
$emp_code=$_SESSION["emp_code"];
$e_id=$_SESSION['e_id'];
$email=$_SESSION["email"];
$sql = "DELETE FROM `training_info` WHERE (`e_no`='$e_id' or `emailid`='$email') and `doc_id`='$doc_id'";
mysqli_query($conn, $sql);

$qry="SELECT * FROM `training_info` WHERE e_no='$e_id' or emailid='$email'";
$result = mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$row['course_type']."</td><td>".$row['title']."</td><td>".$row['duration']."</td><td>".date("d/m/Y", strtotime($row['from_date']))."</td><td>".date("d/m/Y", strtotime($row['to_date']))."</td><td><a target='_blank' href=".$row['certificate_url'].">View</a></td><td><button type='button' class='btn btn-danger' onclick='deleteLetter(".$row['doc_id'].")'>X</button></td></tr>";
	}
}
exit();

?>