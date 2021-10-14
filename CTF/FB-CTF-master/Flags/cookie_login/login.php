<?php
//sets user cookie
$POSTuser = $_POST['user'];
$POSTpass = $_POST['pass'];
$cookie = $_COOKIE['auth'];
//echo $cookie;
$sessioncookie = $_COOKIE['session'];
//echo $sessioncookie;


if ($cookie == "true") {
	
	Header ("Location: ./success.php");
	
} else {
	
	Header ("Location: ./index.php");
}

?>
