<?php   
 include 'db_conn.php';  
 $query = "select * from mechanics";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>mechanic list</title>  
      
 </head>  
   
 <header>mechanics list </header>  
 <body>
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading"> 
      <th>sl no.</th> 
           <th>Mechanic list</th>  
           
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['mechname']."</td>  
                               

                                
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

       background:
  linear-gradient(
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0.5)
  ),url('Garage.jpeg');

     width: 100%;
     height: 100vh;
     
     background-repeat: no-repeat;
     background-size: cover;
     background-position: center;
     font-family: cursive; 
 }  
 header{  
      width: 100%;  
      height: 80px;  
      color: white;
      background-color:rgba(0, 0, 0, 0.5);  
      font-size: 40px;
      font-family: cursive;
      text-align: center;

 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
      font-size: 20px;
     border-color: white;
 }  
 .heading{  
      background-color: white;  
 }  
 .heading th{  
      padding: 10px 0;  
 }  
 .data{  
      text-align: center;  
      color: white;  
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
