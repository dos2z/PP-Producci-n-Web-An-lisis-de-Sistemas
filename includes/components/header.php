<?php
//$_SESSION['user'] = "";
?>

<header>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php if ((isset($_SESSION['user']))) {
                                                echo "index.php?page=adminpanel";
                                            } else {
                                                echo "index.php?page=home";
                                            } ?>"><img src="assets/imgs/logo.png" alt="City Farmac" width="200"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">



                    <?php if (isset($_SESSION['user'])) { ?>
                        <a class="nav-link <?php if ($_GET['page'] === 'profile') echo 'active'; ?>" href="index.php?page=adminpanel">Administrar</a>
                        <a class="nav-link <?php if ($_GET['page'] === 'profile') echo 'active'; ?>" href="index.php?page=profile">Perfil</a>
                        <a class="nav-link" href="includes/process/logout.php">Cerrar Sesión</a>
                    <?php } else { ?>
                        <a class="nav-link <?php if ($_GET['page'] === 'products') echo 'active'; ?>" href="index.php?page=products">Productos</a>
                        <a class="nav-link <?php if ($_GET['page'] === 'contact') echo 'active'; ?>" href="index.php?page=contact">Contacto</a>
                        <a class="nav-link <?php if ($_GET['page'] === 'login') echo 'active'; ?>" href="index.php?page=login">Iniciar Sesión</a>
                    <?php } ?>


                </div>
            </div>
        </div>
    </nav>

</header>