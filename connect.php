<?php
	date_default_timezone_set('Asia/Kolkata');
	$user = '';
	$pass = '';
	$db = 'id5943811_game';
	$link = new mysqli('localhost', $user, $pass, $db) or die("ERROR: Could not connect. " . mysqli_connect_error());
	$sql = "INSERT INTO users (userName, date, numberChances) VALUES ('" . $_GET["name"] . "', '" . date("Y-m-d H:i:s") . "'," . $_GET["n"] . ")";
	mysqli_query($link, $sql);
	mysqli_close($link);
	header('Location: index.php');
?>
