<?php 
session_start();

if (!isset($_SESSION['userID'])) {
	header("location: ownerlogin.php");
}

?>