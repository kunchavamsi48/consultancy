<?php
    require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<a href="profile.php" style = "text-decoration:none;"><i class="fa fa-arrow-circle-left" style="font-size:48px;color:red"></i></a>
<div  class="row">
    <div id="changes">
     
        <h1>Password reset</h1>
        <?php
            $id = $_SESSION['id'];
            $q = "SELECT * FROM userdata WHERE uid = '$id'"; 
            $result = $con->query($q);
            while($row = $result->fetch_assoc()){
              $cur_psw = $row['psw'];
            }
        ?>
        <form method = "post">
            <label for="old_psw">Old password:<span style = "color:red">*</span></label>
            <input type="password" name = "old_psw" >
            <input type="submit" name = "sub">
          <br>
          <?php 
            if(isset($_POST['sub'])){
                $password = $_POST['old_psw'];

                if($password == $cur_psw){
                    echo'<label for="new_psw">New password:<span style = "color:red">*</span></label>
                    <input type="password" name = "new_psw" required>
                    <input type="submit" name = "save">';
                    
                }else{
                    echo"password didnt match";
                }
            }
          ?>  
          <?php
                if(isset($_POST['save'])){
                    $new_psw = $_POST['new_psw'];
                    $sql = "UPDATE userdata SET psw='$new_psw' WHERE uid='$id'";
                    if($con->query($sql)){
                        header("location:profile.php");
                        
                    }else{
                        echo"connection error";
                    }
                }
          ?>
        </form>
         
    </div>
</body>

</html>
