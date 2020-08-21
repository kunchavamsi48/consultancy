<?php

require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        
            <div class="container">
                <div class = "logo">
                    <img src="logo1.png" >
                    <p><strong>A</strong>cuerdo International</p>
                </div>
                <div class="user">
                    
                    <form action="login.php" method = "post">
                        <label for="uid">Username</label>
                        <input type="text" name="uid" placeholder="eg:john98">
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd" placeholder="eg:pass@12">
                        <button type="submit">Login</button>
                    </form>
                     
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html" >About us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="clients.html">Clients</a></li>
                    <li id="current"><a href="career.php">Careers</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    
                </ul>
            </nav>    
    </header>
   <img src="stk12.jpg" id="img1" width="1525" height="400">
        <div class="centeredx" id="bg1">
           Careers
    </div>
    <div  class="container0">
        <h1 class="head1" >We have multiple career options available</h1>
        <br>
        <h4 class="head4" >Reimagine your business with a hands-on thought partner to help you define, design, and deliver results 
</h4>
<br>
    <p id="tx1">
There are various job oppurtunities available in our company for various positions in different 
    departments. By joining our company, you can be a part of something bigger than just this company and make your mark in the industry. Stay in touch with us for further information regarding any new openings in the company.
<br>
For further information, feel free to contact us through social media or through our company Email.<br>
    </p>
</div>
</div>
</div>
<div class="jobs">
<div class="fil">
  
    <form method = "post">
        <select name="fields">
             <option value="none">Select field</option>
             <option value="IT">Information and Technology</option>
             <option value="management">Management</option>
        </select>
        <input type="submit" value="filter">
        </form>
        <div class = 'jobdesc'>
        <?php
        if(isset($_POST['fields'])){
            $opt = $_POST['fields'];
        echo "<table >
            <tr>
                <th>Type of services</th>
                <th>Job details</th>
            </tr>";
        if($opt == "none"){
            $q = "SELECT * FROM careees";
            if($result = $con->query($q))
            {
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                        <td>".$row["field_type"]."</td>
                        <td>".$row["jobs"]."</td>
                    </tr>";
                }
            }
        }else {
            $q = "SELECT * FROM careees WHERE field_type = '$opt'";
            if($result = $con->query($q))
            {
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                        <td>".$row["field_type"]."</td>
                        <td>".$row["jobs"]."</td>
                    </tr>";
                }
            }
        }
        
        }else{
            echo "<table >
            <tr>
                <th>Type of services</th>
                <th>Job details</th>
            </tr>";
       
            $q = "SELECT * FROM careees";
            if($result = $con->query($q))
            {
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                        <td>".$row["field_type"]."</td>
                        <td>".$row["jobs"]."</td>
                    </tr>";
                }
            }  

        }
        echo" </table>";
    ?>
        </div>
    
</div>
</div>
</body>
</html>
