<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('../controllers/controller-list-one-user.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/user.php');
?>

<?php include '../elements/meta.php' ?>


<body class="d-flex flex-column min-vh-100 BGlanding border border-primary">

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 col-12 bg-light utilisateurSize">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-2 col-10 m-2">
                    <a href="user-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                </div>
            </div>

            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-5  ligneModify "> Utilisateur </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row roundColor justify-content-evenly rounded m-3 ">
                        <div class="col-lg-5 col-12 text-center p-2">
                            <img class="pictureOneUser " src="../public/img/<?= $users['user_picture_profil'] ?>" alt="" srcset="">
                        </div>
                        <div class="col-lg-5 col-12">
                            <p class="fs-5 mt-5">Nom : <b><?= $users['user_lastname'] ?></b></p>
                            <p class="fs-5">Prénom : <b><?= $users['user_firstname'] ?></b></p>
                            <p class="fs-5">Mail : <b><?= $users['user_mail'] ?></b></p>
                            <p class="fs-5">Mobile : <b><?= $users['user_phone'] ?></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>
</body>

</html>