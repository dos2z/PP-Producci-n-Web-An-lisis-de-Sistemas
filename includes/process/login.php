<?php
include_once '../../conn/db.php';
$users = $users ?? [];

session_start();


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$aut = false;
foreach ($users as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['user'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['isAdmin'] = $user['admin'];
        $aut = true;
        break;
    } 
}

if ($aut) {
    header("Location: ../../index.php?page=home");
} else {
    header("Location: ../../index.php?page=login&error=1");
}
