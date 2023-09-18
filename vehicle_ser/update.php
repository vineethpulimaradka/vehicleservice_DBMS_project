<?php
session_start();
require 'dbcon.php';

if(isset($_POST['update_catagory']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
    

    $query = "UPDATE catagory_list SET catagory='$catagory' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);    

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: indexcat.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Not Updated";
        header("Location: indexcat.php");
        exit(0);
    }

}
?>