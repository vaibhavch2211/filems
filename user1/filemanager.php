<?php

session_start();

$username = $_SESSION["username"]; 
if($_SESSION["username"] != "user1"){
	Header("Location:/~hajari/php/user_login/login.php");
}

if ($handle = opendir('./files/')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "<a href='./files/$file' title=''>$file</a></br>";
            
        }
    }
    closedir($handle);
}
?>

