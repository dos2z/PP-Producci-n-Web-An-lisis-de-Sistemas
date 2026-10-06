<?php

?>

<header>
    

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=home">City Farmac</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if($_GET['page'] === 'about') echo 'active'; ?>" aria-current="page" href="index.php?page=about">Nosotros</a>
                    <a class="nav-link <?php if($_GET['page'] === 'products') echo 'active'; ?>" href="index.php?page=products">Productos</a>
                    <a class="nav-link <?php if($_GET['page'] === 'contact') echo 'active'; ?>" href="index.php?page=contact">Contacto</a>

                </div>
            </div>
        </div>
        </nav>

</header>