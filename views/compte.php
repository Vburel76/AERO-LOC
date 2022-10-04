<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-compte.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/user.php');
?>
<?php
include '../elements/meta.php';
?>

<header class="text-center d-none d-lg-block">
    <h1 class="AeroLoc">Aero-Loc</h1>
</header>

<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-9 col-11 bg-light m-5 p-0">

            <div class="row justify-content-center mt-1">
                <div class="col-lg-11 col-11 text-center m-3 p-2 fs-3 ">
                    <p class=" text-center fontTitle mt-2 lignecompte m-3 p-2 fs-3 "> Mon profil </p>
                </div>
            </div>


            <div class="row justify-content-center m-2 p-0">
                <div class="col-lg-8 col-12 m-5 cardColor">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-10 text-center m-4">
                            <img class="imgCompte " src="../public/img/<?= $user['user_picture_profil'] ?>" alt="" srcset="">
                        </div>
                        <div class="col-lg-5 col-10 m-4">
                            <p class="m-3 mb-2">Nom : <b><?= strtoupper($user['user_lastname']); ?></b></p>
                            <p class="m-3">Prénom : <b><?= strtoupper($user['user_firstname']); ?></b></p>
                            <p class="m-3">mail : <b><?= strtoupper($user['user_mail']); ?></b></p>
                            <p class="m-3">Mobile : <b><?= strtoupper($user['user_phone']); ?></b></p>
                        </div>

                        <div class="row justify-content-center m-0 p-0">
                            <div class="col-lg-3 col-10 col-10 m-3 text-center">
                                <a class=" btn p-2 TextcolorPagePlane fontText" href="profil.php">Modifier le profil</a>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-11 col-11">
                                <p class="fs-5 fontTitle text-center m-3 p-2 lignephone mt-3"> Mes photos </p>
                            </div>
                        </div>

                        <div class="row m-0 p-3 justify-content-center mb-3 mt-3">
                            <div class="col-lg-10 col-9 ">
                                <div class="row justify-content-center">

                                    <div class="col-10 col-lg-4 p-0">
                                        <a data-lightbox="example-set" href="../public/img/galery1.jpg">
                                            <img class="galeryImg galery" src="../public/img/galery1.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="col-10 col-lg-4 p-0">
                                        <a data-lightbox="example-set" href="../public/img/galery2.jpg">
                                            <img class="galeryImg galery" src="../public/img/galery2.jpg" alt="">
                                        </a>
                                    </div>

                                    <div class="col-10 col-lg-4 p-0">
                                        <a data-lightbox="example-set" href="../public/img/galery3.jpg">
                                            <img class="galeryImg galery" src="../public/img/galery3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>







    <?php include '../elements/footer.php' ?>
</body>

</html>