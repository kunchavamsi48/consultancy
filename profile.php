<?php
    require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<a href="home.php" style = "text-decoration:none;"><i class="fa fa-arrow-circle-left" style="font-size:48px;color:red"></i></a>
<h1>PROFILE</h1>
<div  class="row">
<div class = "profile_table">
<?php
$id = $_SESSION['id']; 
$q = "SELECT * FROM userdata WHERE uid = '$id'"; 
$result = $con->query($q);
while($row = $result->fetch_assoc()){
    $name = $row['name'];
    $mail = $row['email'];
}
?>
<table>
      <tr>
        <td id = "ques">NAME </td>
        <td id = "response"><?php  echo $name;?></td>
      </tr>
      <tr>
        <td id = "ques">EMPLOYEE ID </td>
        <td id = "response"> <?php $empid = $id + 1000; echo $empid; ?></td>
      </tr>
      <tr>
        <td id = "ques">EMAIL </td>
        <td id = "response"><?php echo $mail;?></td>
      </tr>
    </table>
    <a href="edit_profile.php" class = "edit">Edit</a>
</div>  
</body>

</html>