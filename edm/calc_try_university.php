<?php 

include 'login_config.php';
session_start();
$branch_code=$_SESSION['branch_code'];
$term=$_SESSION['term'];
$dept=$_SESSION["dept"];
$tchr_id=$_SESSION["emp_code"];
$course_id=$_SESSION['course_id'];
$flag=$_SESSION["flag"];


// $sql= "Select `course_id`,`std_id`, ((`marks_university`.`theory`)/8)  as th_1,((`marks_university`.`practical`)/2.5) as pr_1 FROM `marks_university` WHERE `marks_university`.`course_id`='$course_id' ";
//$sql= "Select `course_id`,`std_id`, IF( ((`marks_university`.`theory`)/8) >=6,((`marks_university`.`theory`)/8))  as th_1,((`marks_university`.`practical`)/2.5) as pr_1 FROM `marks_university` WHERE `marks_university`.`course_id`='$course_id' ";

 $sql= "Select `course_id`,`std_id`, ((`marks_university`.`theory`)/8) as th_1,((`marks_university`.`practical`)/8) as pr_1   FROM `marks_university` WHERE `marks_university`.`course_id`='$course_id' ";
    

    $result = $conn -> query($sql);

// Associative array
while ( $row = $result -> fetch_assoc()) {
  if ($row["th_1"]>=6 && $row["pr_1"]) {
            
                    
print_r ($row["course_id"]);
echo "<br>";
print_r ($row["std_id"]);
echo "<br>";
print_r ($row["th_1"]);
echo "<br>";
print_r ($row["pr_1"]);
echo "<br>";

echo "<br><br>";
}
}





// Free result set
$result -> free_result();




?>