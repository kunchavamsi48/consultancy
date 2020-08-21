<?php
  include 'config.php';
?> 
<!DOCTYPE html> 
<html> 
      
<head> 
    <title>Time Tracker</title> 
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
  
<body> 
<a href="home.php" style = "text-decoration:none;"><i class="fa fa-arrow-circle-left" style="font-size:48px;color:red"></i></a>
<h1>Enter time periods </h1>
	<form method = "post">
		<label for="today">Date : </label>
		<input type="date" name="today" required><br>
		<label for="start_time">reporting time </label>
		<input type="time" name="start_time"required><br>
		<label for="stop_time">leaving time</label>
		<input type="time" name="stop_time" required><br>
		<input type="submit" name="submit">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$date = $_POST['today'];
			$login_time = $_POST['start_time'];
			$logout_time= $_POST['stop_time'];
			$uid = $_SESSION['id'];
			$q = "INSERT INTO timetracker(uid, date, login_time, logout_time) VALUES ('$uid', '$date', '$login_time', '$logout_time')";
			if($con->query($q)){
				echo "updated sucessfully";
			}else{
				echo "error";
			}
			
		}

	?>
</body>


</head> 
  
</html> 