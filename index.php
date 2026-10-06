<?php

session_start();
$page = $_GET["page"] ?? "home";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Farmac</title>
</head>

<body>
    <?php
    require_once './includes/components/header.php';
    ?>
    <main>
        <?php
            if (file_exists("views/$page.php")) {
                require_once "views/$page.php";
            } else {
                require_once "views/error404.php";
            }
        ?>

    </main>
    <?php
    require_once './includes/components/footer.php';
    ?>
</body>

</html>