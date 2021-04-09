<?php

require_once "config.php";

$title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

$conn->exec("INSERT INTO jobs (title, users_id)
                        VALUES ('$title', '$Description', {$_SESSION['job_id']})");


header("Location: profile.php");
die();