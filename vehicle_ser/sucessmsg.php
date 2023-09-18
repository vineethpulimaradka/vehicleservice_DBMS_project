<html>
<head>
    <title> request buttun page</title>

</head>
<body>
    <form action="clientmain.php.php" method="post">
        <header>
         <div class="wrapper">
            <!--<div class="logo">
            <img src="" alt="">
        </div>-->
        
    <ul class="nav-area">


<li><a href="aboutus.php">About</a></li>
</ul>
</div>
    <div class="welcome-text">
        <h1>
    your request has been succesfully submitted our mechanic will contact you soon <br></h1>
<a href="clientmainpage.php">Back</a>
<br>
</div>
</form>
</header>
</body>
</html>
<style media="screen">
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body {
    font-family: 'Poppins', sans-serif;
}
.wrapper {
    width: 1170px;
    margin: auto;
}
header {
    
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
    
}
.nav-area {
    float: right;
    list-style: none;
    margin-top: 30px;
}
.nav-area li {
    display: inline-block;
}
.nav-area li a {
    color: #fff;
    text-decoration: none;
    padding: 5px 20px;
    font-family: poppins;
    font-size: 16px;
    text-transform: uppercase;
}
.nav-area li a:hover {
    background: #fff;
    color: #333;
}
.logo {
    float: left;
}
.logo img {
    width: 100%;
    padding: 15px 0;
}
.welcome-text {
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 20% 30%;
    text-align: center;
    font-family: cursive;
}
.welcome-text h1 {
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 20px;
}
.welcome-text h1 span {
    color: #00fecb;
}
.welcome-text a {
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    margin-top: 20px;
    display: inline-block;
    color: #fff;
}
.welcome-text a:hover {
    background: #fff;
    color: #333;
}


</style>




<?php 
   $vehicletype=$_POST["vehicletype"];
   $ownername=$_POST["ownername"];
   $ownercontact=$_POST["ownercontact"];
   $email=$_POST["email"];
   $address=$_POST["address"];
   $vehiclename=$_POST["vehiclename"];
   $vehicleregno=$_POST["vehicleregno"];
   $servicedetail=$_POST["servicedetail"];



   $conn=new mysqli('localhost','root','','service');

   if($conn->connect_error)
   {
       die("connection failed".$conn->connect_error);
   }else{
       $result=$conn->prepare("insert into service_request(vehicletype,ownername,ownercontact,email,address,vehiclename,vehicleregno,servicedetail)values(?, ?, ?, ?, ?, ?, ?, ?)");
       $result->bind_param("ssssssss",$vehicletype,$ownername,$ownercontact,$email,$address,$vehiclename,$vehicleregno,$servicedetail);
       $result->execute();
       $result->close();
       $conn->close();
}
?>

