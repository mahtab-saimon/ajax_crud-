<?php
include_once "../connection.php";
    if (isset($_POST['checking_update'])){
        $stud_id = $_POST['stud_id'];
         $first_name =$_POST['first_name'];
         $last_name =$_POST['last_name'];
         $class =$_POST['class'];
         $section =$_POST['section'];

         $query = "update students
                    set
                    first_name='$first_name',
                    last_name='$last_name',
                    class='$class',
                    section='$section'
                    where id = '$stud_id'
                    
         ";
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