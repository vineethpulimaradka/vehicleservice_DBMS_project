<?php   
 include 'db_conn.php';  
 $query = "select * from service_request";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>req service</title>  
      
 </head>  
 <body>  
 <header>service request detail</header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading"> 
      <th>sl no.</th> 
           <th>vehicle type</th>  
           <th>ownername</th>  
           <th>owner no</th>  
           <th>email</th>  
           <th>address</th>  
           <th>vehicle name</th>  
           <th>vehicle reg no.</th> 
            <th>service detail</th>
           <th>Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['vehicletype']."</td>  
                               <td>".$result['ownername']."</td>  
                               <td>".$result['ownercontact']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['address']."</td>  
                               <td>".$result['vehiclename']."</td>
                                <td>".$result['vehicleregno']."</td>
                                 <td>".$result['servicedetail']."</td>

                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  

<style>
 *{  
      padding: 0;  
      margin: 0;  
      box-sizing: border-box;  
 }  
 body{  
      width: 100%;  
      height: 100vh;  
      background-color: #34495e;  
      position: relative;  
      font-family: 'verdana',sans-serif;  
 }  
 header{  
      width: 100%;  
      height: 100px;  
      background-color: #2c3e50;  
      color: white;
      font-family:cursive;
      text-align: center;
      font-size: 40px;

 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 }  
 .heading{  
      background-color: #FFFF;  
 }  
 .heading th{  
      padding: 10px 0;  
 }  
 .data{  
      text-align: center;  
      color: #FFFF;  
 }  
 .data td{  
      padding: 15px 0;  
 }  
 #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 5px 20px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  </style>

 