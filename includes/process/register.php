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


header("Location: ../../index.php?page=home");
