<?php   
 include 'db_conn.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `service_request` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:serverreqdetail.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>