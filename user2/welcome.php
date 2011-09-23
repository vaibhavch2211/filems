<?php
session_start();
$username = $_SESSION["username"]; 
echo "Welcome $username </br>";

if($_SESSION["username"] != "user2"){
	Header("Location:/~hajari/php/user_login/login.php");
}else{
	echo "Go to the <a href='filemanager.php' title=''>File Manager</a></br>";
}
?>

