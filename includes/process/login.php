<?php
include_once '../../conn/db.php';
$users = $users ?? [];
echo "<pre>";
print_r($users);
echo "<pre>";



$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

foreach ($users as $user) {
    if ($user['email'] === $email && $user['password'] === $password) {
        session_start();
        $_SESSION['user'] = $user['name'];
        $_SESSION['is_admin'] = $user['admin'];
        
        header("Location: ../../index.php?page=home");
        exit();
    }else{
        echo "Usuario o contraseña incorrectos";
    }
}
