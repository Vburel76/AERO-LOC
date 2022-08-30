<?php 
session_start();
?>


<nav class="navbar navbar-expand-lg colorNav">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-lg-none d-block dropstart ">
            <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle taille "></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Mon profil</a></li>
                <li><a class="dropdown-item" href="contact.php">contact</a></li>
                <?php if (isset($_SESSION['user'])) { ?>
                    <li><a type="button" class="dropdown-item" href="logout.php">Connection/Deconnection</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link fs-4 textNavbar " href="landing.php">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 textNavbar " href="fly.php">La flotte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 textNavbar " href="formation.php">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 textNavbar " href="location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 textNavbar " href="rss.php">Actu</a>
                </li>
            </ul>

            <div class="d-lg-block d-none dropstart">
                <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle taille"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="compte.php">Mon profil</a></li>
                    <li><a class="dropdown-item" href="contact.php">contact</a></li>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <li><a  class="dropdown-item" href="logout.php">Connection/Deconnection</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>