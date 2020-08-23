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
                     <?php 
                    if($_SESSION['status'] == 'admin')
                    {
                        echo "<a href='adminpage.php'> Manage </a>";
                    } 
                    ?>
                    <a href="profile.php">profile</a>
                    <a href="logout.php">logout  <i class="fa fa-sign-out"></i></a>
                 </div>
             </div>
            </div>
            <div class = "menu" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776</div>
            <nav>
              <ul>
                <li><a href="home.php">Home</a></li>
                    <li><a href="login_about.php" >About us</a></li>
                    <li  id="current"><a href="login_services.php">Services</a></li>
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
    <img src="stk5.jpg" id="img1" width="100%" height="400">
        <div class="centeredx" id="bg1">
            Services
    </div>
    <div class="container0">
<h1 class="head1">We provide a multitude of services in various fields:</h1>
<br>
<h4 class="head4">Our vision is to have every one of our customer's needs met perfectly </h4>
<p id="tx1">
    We follow a service exclusive model which helps accelerate the evolution of an enterprise in achieving improved outcomes with technology-enabled and consumption-based services. We deliver you optimized business processes, enriched insights, smart applications and intelligent infrastructure by leveraging our expertise in integrating software, infrastructure, business processes, professional services, and industry ecosystems.
    </p>
    </div>
    <br>
    <br>
    <img src="stk10.jpg" id="sz">
    <div class="container0">
        <div  class="centeredx2">
            Services we offer
    </div>
    </div>
    <div class="container0">
        <h1 class="head1">Our Expertise:</h1>
        <br>
<h4 class="head4">Artificial intelligence and Machine Learning</h4>
<p id="txt1">
In today’s digital world, data, analytics and AI play a key role in transforming native business operations, creating new business models and unleashing process improvements.  Wipro’s data, analytics and AI services, enable organizations to deliver value across the customers’ journey by empowering users with more agile and intuitive processes.
        </p>
        <br>
        <h4 class="head4">Infrastructure services</h4>
        <p id="txt1">
        Maximize the value of Cloud and IT infrastructure with solutions that integrate deep industry insights, leading technologies and best-in-class execution.
    </p>
    <br>
        <h4 class="head4">Digital operations and platforms</h4>
        <p id="txt1">
        We combine our core business knowledge with leading technologies such as digital, robotics process automation, cognitive technologies and analytics to offer powerful business intelligence that helps in improving business visibility, allowing business leaders to respond quickly to evolving market needs. 
        </p>  
    <br>
    <br>
    <h1 class="head1">We follow a very intimate business model:</h1>
    <br>
    <br>
    <li>Providing information to a client.</li>
    <br>
    <br>
    <li>Solving a client’s problems.</li>
    <br>
    <br>
        <img id="imgf" src="serv.gif" >
    <li>Making a diagnosis, which may necessitate redefinition of the problem.</li>
    <br>
    <br>
    <li>Making recommendations based on the diagnosis.</li>
    <br>
    <br>
    <li>Assisting with implementation of recommended solutions.</li>
    <br>
    <br>
    <li>Building a consensus and commitment around corrective action.</li>
    <br>
    <br>
    <li>Facilitating client learning—that is, teaching clients how to resolve similar problems in the future.</li>
    <br>
    <br>
    <li>Permanently improving organizational effectiveness.</li>
    <br>
    <br>
</div>
</div>
</body>
</html>
