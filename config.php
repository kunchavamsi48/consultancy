<?php
session_start();

// $con = mysqli_connect('localhost:3306','waltairb_root','Wbschool@321');
$con = mysqli_connect('localhost','root');
if (!$con){
    echo "no connection";
}
// mysqli_select_db($con,'waltairb_users');
mysqli_select_db($con,'users');
?> 