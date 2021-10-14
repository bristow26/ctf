<?php
//sets user cookie
$POSTuser = $_POST['user'];
$POSTpass = $_POST['pass'];
$cookie = $_COOKIE['auth'];
$sessioncookie = $_COOKIE['session'];
//echo $sessioncookie;
//echo $POSTuser;
//echo $cookie;

if ($POSTuser == "WillyWonka" && $POSTpass == "Chocolate_Factory") {
		$cookie_name = "secmn";
		setcookie($cookie_name, Nbds5JfdB74L96Hjfbd, time() + (86400 * 30), "/");
		Header ("Location: ./success.php");

} else {

        Header ("Location: ./index.php");
}

?>

