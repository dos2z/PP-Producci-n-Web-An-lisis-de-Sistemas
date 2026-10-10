<?php

//session_start();
$page = $_GET["page"] ?? "home";
if (!isset($_SESSION['user'])) {
    $page = $_GET["page"] ?? "adminpanel";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/imgs/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS y JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- CSS -->
    
    <link rel="stylesheet" href="assets/css/styles.css">
</body>
    <title>City Farmac</title>
</head>

<body>
    <?php
    require_once './includes/components/header.php';
    ?>
    <main class="container my-5">
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