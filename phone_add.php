<?php
require_once "config.php";

$id = filter_var($_POST['ID'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);


$conn->exec("UPDATE users SET phone='$phone' WHERE id = {$_SESSION['ID']}");

header("Location: profile.php");
die();


?>
