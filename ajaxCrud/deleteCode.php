<?php
include_once "../connection.php";
if (isset($_POST['checking_delete'])){
    $stud_id = $_POST['stud_id'];
    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $class =$_POST['class'];
    $section =$_POST['section'];

    $query = "delete from students where id = '$stud_id' ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        echo $return  = "Successfully Deleted";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}