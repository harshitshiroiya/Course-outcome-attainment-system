<?php 
if(isset($_POST["Import"]))
{
    include 'login_config.php';
    session_start();
    $co_id=$_POST['co_id'];
    $term=$_SESSION['term'];
    $course_id=$_SESSION['course_id'];
    echo $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        //$sql_data = "SELECT * FROM prod_list_1 ";
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
        {
            //print_r($emapData);
            //exit();
            $sql = "INSERT into prod_list_1(p_bench,p_name,p_price,p_reason) values ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]')";
            mysql_query($sql);
        }
        fclose($file);
        echo 'CSV File has been successfully Imported';
        header('Location: index.php');
    }
    else
        echo 'Invalid File:Please Upload CSV File';
}
?>