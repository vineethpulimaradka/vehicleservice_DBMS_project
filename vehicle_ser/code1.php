<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_service']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_service']);

    $query = "DELETE FROM service_list WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "servicet Deleted Successfully";
        header("Location: servicelist.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "service Not Deleted";
        header("Location: servicelist.php");
        exit(0);
    }
}


if(isset($_POST['update_service']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $service = mysqli_real_escape_string($con, $_POST['service']);
   

    $query = "UPDATE service_list SET service='$service' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "service Updated Successfully";
        header("Location: servicelist.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "service Not Updated";
        header("Location: servicelist.php");
        exit(0);
    }

}






if(isset($_POST['save_service']))
{
    $service = mysqli_real_escape_string($con, $_POST['service']);
    
    $query = "INSERT INTO service_list (service) VALUES ('$service')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "service Created Successfully";
        header("Location: servicelist.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "service Not Created";
        header("Location: servicelist.php");
        exit(0);
    }
}

?>