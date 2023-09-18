<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_mechanic']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_mechanic']);

    $query = "DELETE FROM mechanics WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "mechanic Deleted Successfully";
        header("Location: mechlist.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "mechanic Not Deleted";
        header("Location: mechlist.php");
        exit(0);
    }
}


if(isset($_POST['update_mech']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $service = mysqli_real_escape_string($con, $_POST['service']);
   

    $query = "UPDATE mechanics SET mechname='$service' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "mechanic Updated Successfully";
        header("Location: mechlist.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "mechanic Not Updated";
        header("Location: mechlist.php");
        exit(0);
    }

}






if(isset($_POST['save_mech']))
{
    $service = mysqli_real_escape_string($con, $_POST['service']);
    
    $query = "INSERT INTO mechanics (mechname) VALUES ('$service')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "mechanic Created Successfully";
        header("Location: mechlist.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "mechanic Not Created";
        header("Location: mechlist.php");
        exit(0);
    }
}

?>