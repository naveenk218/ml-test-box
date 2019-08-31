<?php
session_start();

if (! isset($_POST['login'])) {
    $_SESSION['error'] = "Something went wrong!";
    header("Location: index.php");
}

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == "hr" && $password == "admin") {
    $_SESSION['user'] = $email;   
    header("Location: employee.php");
} else {
    $_SESSION['error'] = "Wrong User name / Password! Try again!";
    header("Location: index.php");
}