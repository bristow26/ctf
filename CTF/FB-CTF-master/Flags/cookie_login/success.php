<?php

$cookie = $_COOKIE['auth'];
$sessioncookie = $_COOKIE['session'];

if ($cookie == "true") {
	
	?><img src="./style/giphy.gif"><br><?php
	echo 'Congratulations! The flag is: MaryPoppins';
	
} else {
	
	Header ("Location: ./index.php");
}

?>
