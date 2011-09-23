<html>
<header><title>welcome page</title></header>
<body>

<?php
if($_SESSION["username"] == "user2"){
	Header("Location:./welcome.php");
}else{
	Header("Location:/~hajari/php/user_login/login.php");
}
?>

</body>
</html> 
