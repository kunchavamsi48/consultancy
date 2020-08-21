<?php
    ob_start();
    require "config.php";
    if(isset($_SESSION['permission'])){

    }
    else{
        echo"You Dont Have Acess Here";
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
                <div class="user">
                    
                            <a href="logout.php">
                                LOGOUT
                            </a>
                     
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php"><i class="fa fa-arrow-circle-left" style="font-size:48px;color:red"></i></a>
                    <li><a href="register.php">NEW REGISTRATION</a></li>
                    <li><a href="addjob.php">ADD JOBS IN CAREER</a></li>
                </ul>
            </nav>    
    </header>
        
</body>
</html>