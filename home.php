<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.html');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        
            <div class="container">
                <div class = "logo">
                    <img src="logo1.png" >
                    <p><strong>A</strong>cuerdo International</p>
                </div>
                <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user"></i>  <?php echo $_SESSION['username'] ?></button>
                     <div class="dropdown-content">
                     <a href="timetrack.php">time tracker</a>
                    <a href="profile.php">profile</a>
                    <?php 
                    if($_SESSION['status'] == 'admin')
                    {
                        echo "<a href='adminpage.php'> Manage </a>";
                    } 
                    ?>
                    <a href="logout.php">logout  <i class="fa fa-sign-out"></i></a>
                 </div>
            </div>
            </div>
            <div class = "menu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776</div>
            <nav>
                <ul>
                    <li id="current"><a href="home.php">Home</a></li>
                    <li><a href="login_about.php" >About us</a></li>
                    <li><a href="login_services.php">Services</a></li>
                    <li><a href="login_clients.php">Clients</a></li>
                    <li><a href="login_career.php">Careers</a></li>
                    <li><a href="login_contact.php">Contact us</a></li>
                    
                </ul>
            </nav>   
            <div id="mySidenav" class="sidenav">
			    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="home.php">Home</a>
                <a href="login_about.php">About us</a>
                <a href="login_services.php">Services</a>
                <a href="login_clients.php">Clients</a>
                <a href="login_career.php">Careers</a>
                <a href="login_contact.php">Contact us</a>
                <br><br><br>
                <button class="dropbtn"><i class="fa fa-user"></i>  <?php echo $_SESSION['username'] ?></button>
                     
                     <a href="timetrack.php">time tracker</a>
                    <a href="profile.php">profile</a>
                    <?php 
                    if($_SESSION['status'] == 'admin')
                    {
                        echo "<a href='adminpage.php'> Manage </a>";
                    } 
                    ?>
                    <a href="logout.php">logout  <i class="fa fa-sign-out"></i></a>
                
		</div>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                // document.getElementById("inavigation,inbody,footer,marquee").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                // document.getElementById("inavigation,inbody,footer,marquee").style.marginLeft= "0";
            }
        </script>     
    </header>
    <img src="stk1.jpg" id="img1" width="100%" height="400">
        <div class="centeredx" id="bg1">
        Acuerdo International
    </div>
    <div  class="container0">
        <h1 class="head1" >We at XYZ consultancy strive for perfection </h1>
        <br>
        <h4 class="head4" >Reimagine your business with a hands-on thought partner to help you define, design, and deliver results 
</h4>
<br>
    <p id="tx1">
New technologies and business models are driving companies to transform at lightning speed for a digital, customer-first world. Wipro’s Consulting practice helps business leaders respond to their customers’ needs by driving digital-first transformation: from operations to technologies to people.<br>
<br>
Leading global analyst firms name us leaders in digital transformation strategy and consulting. And global Fortune 500 companies work with us because we deliver integrated strategy, digital and domain expertise, and apply analytics and insights to help them find hidden value.<br>
<br>
With a strong heritage of innovation and entrepreneurship in technology services, we help companies leverage the potential from digital technologies
    </p>
</div>
</div>
</body>
</html>