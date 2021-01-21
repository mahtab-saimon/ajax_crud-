<?php
include_once "../connection.php";
    if (isset($_POST['checking_add'])){
         $first_name =$_POST['first_name'];
         $last_name =$_POST['last_name'];
         $class =$_POST['class'];
         $section =$_POST['section'];

         $query = "INSERT INTO students(first_name,last_name,class,section) values ('$first_name','$last_name','$class','$section')";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            echo $return  = "Successfully Stored";
        }
        else
        {
            echo $return  = "Something Went Wrong.!";
        }
    }