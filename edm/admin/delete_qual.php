<?php
//$app_no="789456";
$doc_id=$_GET["doc_id"];
session_start();
include_once('db_connect.php');
$email=$_SESSION["email"];
$e_id=$_SESSION['e_id'];
$emp_code=$_SESSION["emp_code"];
$email=$_SESSION["email"];
$sql = "DELETE FROM `qual_details` WHERE (`e_no`='$e_id' or `emailid`='$email') and `doc_id`='$doc_id'";
mysqli_query($conn, $sql);

$qry="SELECT * FROM `qual_details` WHERE e_no='$e_id' or emailid='$email'";
$result = mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if(date("d/m/Y", strtotime($row['passing_month']))=="01/01/1970")
		{
			$pass="-";
		}
		else
		{
			$pass=date("d/m/Y", strtotime($row['passing_month']));
		}
		echo "<tr><td>".$row['qual_type']."</td><td>".$row['course']."</td><td>".$row['specialisation']."</td><td>".$pass."</td><td><a target='_blank' href=".$row['file_url'].">View</a></td><td><button type='button' class='btn btn-danger' onclick=deleteLetter('".$row['doc_id']."')>X</button></td></tr>";
	}
}
exit();

?>