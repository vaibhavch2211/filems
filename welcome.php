<?php

//Returns current page's URL
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}


session_start();
$username = $_SESSION["username"]; 
echo "Welcome $username </br>";

if(curPageURL != "*/files/".$username."*"){
	Header("Location:./login.php");
}else{
	echo "Go to the <a href='filemanager.php' title=''>File Manager</a></br>";
}
?>
