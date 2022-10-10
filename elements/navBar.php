<nav class="navbar navbar-expand-lg colorNav p-0">
    <div class="container-fluid widthNavbar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-lg-none d-block dropdown dropstart">
            
                <?php if (isset($_SESSION['user'])) { ?>
                    <p class="m-auto d-inline textUserNavBar"><?= $_SESSION['user']['user_lastname'] ?></p>
                <?php } ?>
                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle taille "></i>
                </button>
            
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php if (isset($_SESSION['user'])) { ?>
                    <li><a class="dropdown-item" href="compte.php">Mon profil</a></li>
                <?php } ?>

                <?php if (isset($_SESSION['user'])) { ?>
                    <li><a class="dropdown-item" href="reservation.php">Réservation</a></li>
                <?php } ?>

                <?php if (isset($_SESSION['user'])) { ?>
                    <li><a type="button" class="dropdown-item" href="logout.php">Déconnexion</a></li>
                <?php } ?>

                <?php if (!isset($_SESSION['user'])) { ?>
                    <li><a class="dropdown-item" href="login.php">Connexion</a></li>
                <?php } ?>

                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id_role'] == 1) { ?>
                    <hr>
                    <li><a class="dropdown-item fw-bold" href="admin.php"><i class="bi bi-gear"></i> Admin</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2  text-center  mb-lg-0 ">
                <li class="nav-item me-3 sizeLiNavBar backgroundNavbar rounded ">
                    <a class="nav-link textNavBar " href="landing.php">A propos</a>
                </li>
                <li class="nav-item me-3 sizeLiNavBar backgroundNavbar rounded">
                    <a class="nav-link textNavBar" href="fly.php">La flotte</a>
                </li>
                <li class="nav-item me-3 sizeLiNavBar backgroundNavbar rounded">
                    <a class="nav-link textNavBar" href="formation.php">Formation</a>
                </li>
                <li class="nav-item me-3 sizeLiNavBar backgroundNavbar rounded">
                    <a class="nav-link textNavBar" href="pagePlane.php">Location</a>
                </li>
            </ul>

            <div class="d-lg-block d-none dropstart">
                <div class="d-flex">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <p class="m-auto textUserNavBar"><?= $_SESSION['user']['user_lastname'] ?></p>
                    <?php } ?>
                    <button class="btn iconBorder " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle taille"></i>
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li><a class="dropdown-item" href="compte.php">Mon profil</a></li>
                        <?php } ?>
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li><a class="dropdown-item" href="reservation.php">Réservation</a></li>
                        <?php } ?>

                        <?php if (isset($_SESSION['user'])) { ?>
                            <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                        <?php } ?>

                        <?php if (!isset($_SESSION['user'])) { ?>
                            <li><a class="dropdown-item" href="login.php">Connexion</a></li>
                        <?php } ?>

                        <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id_role'] == 1) { ?>
                            <hr>
                            <li><a class="dropdown-item fw-bold" href="admin.php"><i class="bi bi-gear"></i> Admin</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>