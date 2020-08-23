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
     
        <h1>enter the changes</h1>
        <?php
            $id = $_SESSION['id'];
            $q = "SELECT * FROM userdata WHERE uid = '$id'"; 
            $result = $con->query($q);
            while($row = $result->fetch_assoc()){
              $fname = $row['name'];
             
              $email = $row['email'];
            }
        ?>
        <form method = "post">
            <label for="name">NAME:<span style = "color:red">*</span></label>
            <input type="text" name = "name" required>
          <br>
            <label for="mail">Email :</label>
            <input type="text" name = "mail" value = <?php echo $email; ?> style = "margin-top:1%;"><br>
            <input type="submit" value = "save" name = "save" style = "width:5%;margin-left:50%;">
        </form>
        <?php

            
            if(isset($_POST['name'])){
              $new_name = $_POST['name'];
           
            }else{
              $new_name = $fname;
            }
            if(isset($_POST['mail'])){
              $new_email = $_POST['mail'];
          
            }else{
              $new_email = $email;
            }
            if(isset($_POST['save'])){
                $sql = "UPDATE userdata SET name='$new_name',email='$new_email' WHERE uid='$id'";
            if ($con->query($sql)) {
              header("location:profile.php");
            } else {
              echo "Error updating record: " . $con->error;
            }
            }
            // if(isset($_POST['name']) || isset($_POST['mail'])){
            //   $q = "UPDATE userdata SET name= '$new_name',email='$new_email' WHERE name= '$name',email='$email' ";
            //   $result = mysqli_query($con,$q);
            //   if($result){
            //     echo "sucessfully updated ";
            //   }else{
            //     echo "there a technical issue in updating";
            //   }
            // }
        ?>

    </div>
</body>

</html>
