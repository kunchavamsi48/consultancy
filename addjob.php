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
	<h1 id="head">Add job Details</h1>
  <div class="leftcolumn">
  	<!-- <img src="images/logo.png" width="200" height="150"> -->
  	<br>
  	<br>
    <div id="ft3" class="card">
    	<br>
    	
      <h2 id="pos1">Acuerdo International</h2>
      <br>
      <br>
      
      	<form method = "post">
          <label for="input_field">Field : </label>
          
          <select name="input_field" style = "padding:1%;font-size:15px;width:50%;margin-bottom:3%;" required>
            <option value="IT">Infromation Technology</option>
            <option value="management">Management</option>
          </select>
          <br>
          <label for="job_details " >Job Description : </label>
          <input type="text" name = "job_details" required>
          <input type="submit" id = "buttons3" value = "Post" name = "post">
      	</form>
      
    </div>
  </div> 

</div>
<?php
    if(isset($_POST['post'])){
      $field = $_POST['input_field'];
    $des = $_POST['job_details'];
    $q = "INSERT INTO careees(field_type, jobs) VALUES('$field','$des')";
    if($con->query($q)){
      echo"sucessfully updated in the database";
    }else{
      echo"some error";
    }
    }
?>
</body>
</html>
