<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_catagory']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_catagory']);

    $query = "DELETE FROM catagory_list WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "catagory Deleted Successfully";
        header("Location: indexcat.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "catagory Not Deleted";
        header("Location: indexcat.php");
        exit(0);
    }
}


if(isset($_POST['update_cat']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $service = mysqli_real_escape_string($con, $_POST['service']);
   

    $query = "UPDATE catagory_list SET catagory='$service' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "catagory Updated Successfully";
        header("Location: indexcat.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "catagory Not Updated";
        header("Location: indexcat.php");
        exit(0);
    }

}





if(isset($_POST['save_catagory']))
{
    $catagory = mysqli_real_escape_string($con, $_POST['catagory']);
    
    $query = "INSERT INTO catagory_list (catagory) VALUES ('$catagory')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "catagory Created Successfully";
        header("Location: indexcat.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "catagory Not Created";
        header("Location: indexcat.php");
        exit(0);
    }
}

?>