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
<html>
<link rel="stylesheet" type="text/css" href="regcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title>Register</title>
</head>
<body id="ft0">
<!--<div class="header">
  <h1>My Website</h1>
</div> -->
<a href="adminpage.php" style = "text-decoration:none;"><i class="fa fa-arrow-circle-left" style="font-size:48px;color:red"></i></a>
<div  class="row">
	<h1 id="head">New Registration</h1>
  <div class="leftcolumn">
  	<!-- <img src="logo.png" width="200" height="150"> -->
  	<br>
  	<br>
    <div id="ft3" class="card">
    	<br>
    	
      <h2 id="pos1">XYZ Consultancies</h2>
      <br>
      <br>
      
      	<form method = "post">
     <label for="fname">Full Name:</label><br>
     <input  type="text" id="fname" name="fname" ><br>
     <label for="uname">Username:</label><br>
     <input  type="text" id="uname" name="uname" ><br>
     <label for="email">Email</label>
     <input type="text" name = "email">
     <label for="password">Password</label>
     <input type="text" name = "password">
     <label for="status">Status</label>
     <input type="text" name = "status">
     <input type="submit" id = "buttons3" value = "register">
      	</form>
      
    </div>
  </div> 
  <!-- <div id="ft2" class="rightcolumn">
    <div class="card">
      <h2>Enter your credentials on the right to login/sign up</h2>
      <img class="dispimg" src="images/login.png">
      <p>Login to access more features</p>
      <h3>Need help?<br> contact us through:</h3>
      <p>example123@gmail.com</p>
    </div>
  </div> -->
</div>
<?php
    if(isset($_POST['email'])){
        $mail = $_POST['email'];
        $f= $_POST['fname'];
        $u = $_POST['uname'];
        $pass = $_POST['password'];
        $status = $_POST['status'];
        $q = "SELECT * FROM userdata WHERE email = '$mail' ";
         if(mysqli_num_rows($con->query($q)) < 1){
            $q1 = "INSERT INTO userdata(name, uname, email, psw, status) VALUES ('$f', '$u', '$mail', '$pass', '$status')";
            if($con->query($q1)){
                echo "sucessfully updated in database";
            }else{
                echo "Not updated in database";
            }
         }
    }
    
?>
</body>
</html>
