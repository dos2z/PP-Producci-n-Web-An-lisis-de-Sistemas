<?php
$user = $_SESSION['user'];
?>

<h1>Bienvenido <?= $user ?>!</h1>

<ul>
    <li>
        <a href="index.php?page=profile">Ir a mi perfil</a>
    </li>
    <li>
        <a href="index.php?page=adminproducts">administrar productos</a>
    </li>
    <li>
        <a href="index.php?page=admincategories">administrar categorías</a>
    </li>
</ul>