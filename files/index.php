<?php

//Recursively sets chmod 000 to all files in user's directory before session_destory();
function signOut() {
  chmod_R('/'.$username, 0000, 0000);
  session_destroy();
}

//TODO Upload file to user's directory. Force refresh of page to reflect changes.
function upload() {
  //TODO Set file permission to 600
}

//TODO Remove file from user's directory. Force refresh to reflect changes.
function remove() {
  
}


session_start();

//Sign out button
echo "<a href='signOut()'>Sign Out</a>";

//TODO Upload button
echo "<a href='upload()'>Upload</a>";

$username = $_SESSION["username"];

//Array of all the files in the user's directory
$files = scandir("/".$username);

//Recursively give read/write permissions to user's directory and files
chmod_R( '/'.$username, 0600, 0600);

//Link to each file in user's directory
//TODO Also include the remove link for each file
for (int  i = 0; i < $files.length; i++) {
  echo "<a href=".$file[i].">".$file[i]."</a> <a href="">Remove</a></br>"
}


}
?>