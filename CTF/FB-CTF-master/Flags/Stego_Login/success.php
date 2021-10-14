<?php
//$POSTuser = $_POST['user'];
//$cookie = $_COOKIE['auth'];
$sessioncookie = $_COOKIE['session'];
$cookie1 = $_COOKIE['secmn'];

if ($cookie1 == "Nbds5JfdB74L96Hjfbd") {
	
	?><img src="./style/leo.gif"><br><?php
	echo 'Congratulations! The flag is: StormTrooper';
	
} else {
	
	Header ("Location: ./index.php");
}

?>
