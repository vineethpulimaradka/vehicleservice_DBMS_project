<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
</head>
<body>

     <header>
          <div class="welcome-text">
<h1>Hello, <?php echo $_SESSION['name']; ?></h1> 
</div>


     
     <div class="wrapper">
          <ul class="nav-area">
  <li><a class="active" href="serverreqdetail.php">service requests</a></li>
  <li><a href="indexcat.php">catogory list</a></li>
  <li><a href="servicelist.php">service list</a></li>
  <li><a href="mechlist.php">mechanic list</a></li>

  
     <li><a href="index.php">Logout</a></li>
</ul>
     </div>
     
</header>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

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
     font-size: 30px;
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
