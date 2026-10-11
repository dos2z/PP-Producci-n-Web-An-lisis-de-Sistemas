<?php
include_once '../../conn/db.php';
$users = $users ?? [];

session_start();


$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$_SESSION['id'] = $_POST['id'] ?? null;
$_SESSION['user'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['isAdmin'] = $_POST['admin'] ?? false;


$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$password2 = $_POST['password2'] ?? '';

// Validar campos
if ($name === '' || !$email === '' || $password === '' || $password2 === '') {

    header('Location: ../../index.php?page=register&error=1');
}

// Comprobar contraseñas
if ($password !== $password2) {

    header('Location: ../../index.php?page=register&error=2');
} else {
    // Registro simulado

    header('Location: ../../index.php?page=register&success=1');
}
