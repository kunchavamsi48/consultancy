<?php
require 'config.php';
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
                    <button class="dropbtn"><i class="fa fa-user"></i>  <?php $id = $_SESSION['id']; 
                    $q = "SELECT * FROM userdata WHERE uid = '$id'"; 
                    $result = $con->query($q);
                    while($row = $result->fetch_assoc()){
                        echo $row['name'];
                    }
                    ?></button>
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
                    <li><a href="home.php">Home</a></li>
                    <li id="current"><a href="login_about.php" >About us</a></li>
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
 <!--<h1 id = "heading">ABOUT</h1> -->
 <div  class="fit_img-about" id="head">
            We at Acuerdo international strive for perfection
    </div>
<br>
<br>
<div  class="container0">
    <p id="tx1">
Ours is an organisation with the primary focus on complete customer satisfasction
and to provide our clients with the best possible services so as to boost their profits and help them
adapt to the ever-changing and volatile market.
<br>
<br>
What makes us stand out from our competition is that we cater exclusively to your needs and requirements 
with the help of <em>industry experts and professionals</em> who will make sure that you reach your business goals.<br>
<br>
We are a company with a comprehensive portfolio of services with quality processes, rich experience in managing clients and great transformational capabilities 
across various business verticals which ultimately enable us to align IT strategies to your needs.
</p>
    <br>
    <br>
    </div>
    <hr>
        <div  class="centeredy">
            Our business model
    </div>
    <div style="margin-top: 150px" class="container0">
    <p id="tx1">
    We understand the complexities of recruiting staff for your companies and how choosing the right people for the right job can help come a long way in boosting company productivity and profits. <br>
    <br>
</p>
<div class="flex-container">
  <div style="background-color:#CF4B0D">Prioritise client success</div>
  <div style="background-color:#D2DE15 ">Focus on Quality over Quantity</div>
  </div>
  <div class="flex-container2">
  <div  style="background-color:#1869C1">Maintain a healthy work environment</div> 
  <div style="background-color:#40B90E">Establish meaningful relationships</div>  
</div>
</div>
</body>
<footer>
    Copyright 2020 Acuerdo International ltd
</footer>
</html>
