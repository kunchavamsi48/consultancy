<?php
ob_start();
include 'config.php';
$name = $_POST['uid'];
$pass = $_POST['pwd'];
$q = "SELECT * FROM userdata WHERE uname = '$name' && psw = '$pass' ";
$result = mysqli_query($con, $q);
if(mysqli_num_rows($result) == 1) {

	while($row = $result->fetch_assoc()) {

		$original_name = $row['name'];

		$original_id = $row['uid'];

		$original_mail = $row['email'];

		$status = $row["status"];

	}
		if($status == 'admin')
		{
			$_SESSION['permission'] = 'ok';
		}
		$_SESSION['username'] = $original_name;
	
		$_SESSION['id'] = $original_id;

		$_SESSION['mail'] = $original_mail; 

		$_SESSION['status'] = $status;

	
		
		
		header("location:https://waltairbs.com/home.php");
		
		
	
}else{
	header('location:index.html');

}

?>
