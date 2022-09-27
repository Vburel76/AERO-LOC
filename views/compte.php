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

    <div class="row justify-content-center m-5 p-0">
        <div class="col-lg-8 cardColor">
            <div class="row justify-content-center">
                <div class="col-lg-4  mt-3">
                    <img class="img-fluid" src="../public/img/<?= $user['user_picture_profil'] ?>" alt="" srcset="">
                </div>
                <div class="col-lg-4  mt-3">
                <p class="m-3">Nom : <b><?= strtoupper($user['user_lastname']); ?></b></p>
                    <p class="m-3">Prénom : <b><?= strtoupper($user['user_firstname']); ?></b></p>
                    <p class="m-3">mail : <b><?= strtoupper($user['user_mail']); ?></b></p>
                    <p class="m-3">Mobile : <b><?= strtoupper($user['user_phone']); ?></b></p>
                </div>

                <div class="row justify-content-center m-0 p-0">
                    <div class="col-lg-3 col-10 m-3 text-center">
                        <a class=" btn p-2 TextcolorPagePlane fontText" href="profil.php">Modifier le profil</a>
                    </div>
                </div>
            </div>
        </div>

    </div>











    <?php include '../elements/footer.php' ?>