<html>
<head><title>Login Page</title></head>
<body>


<form action= <?php echo $_SERVER['PHP_SELF'] ?> method="post">
    <label for="username_label">username: </LABEL>
    <input type="text" name="username" id="username_label"><BR>
    <label for="password_label">password: </LABEL>
    <input type="text" name="password" id="password_label"><BR>
    <input type="submit" value="login">
</form>

<?php

//usernames and passwords stored here
$num_users = 2;
$user = array("user1","user2");
$pass = array("pass1","pass2");

//get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['username']) && isset($_POST['password'])){
	//iterate through all elements of user array to check whether the 
	//entered username in the array.
	for($i=0;$i<$user.length;$i++){
		if($username == $user[$i]){
			if($password == $pass[$i]){
				echo "you are logged in";
				session_start();
				$_SESSION['username']=$username;
				//Header("Location:/~hajari/php/user_login/$username/welcome.php");
				Header("Location:./filemanager.php");
			} else {
				echo "incorrect username or password";
			}
		}
	}
	echo "user does not exist";
}
?>
