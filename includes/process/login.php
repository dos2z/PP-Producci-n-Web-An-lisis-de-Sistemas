<?php
include_once '../../conn/db.php';
$users = $users ?? [];
echo "<pre>";
print_r($users);
echo "<pre>";

session_start();


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

foreach ($users as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['user'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['isAdmin'] = $user['admin'];

        header("Location: ../../index.php?page=home");
        break;
    } else {
        header("Location: ../../index.php?page=login&error=1");
    }
}
