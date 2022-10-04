<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('../controllers/controller-return-plane.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/plane.php');
?>

<?php include '../elements/meta.php' ?>



<body class="d-flex flex-column min-vh-100 BGlanding border border-primary">

    <div class="row m-0 p-0 justify-content-center">
        <?php if ($plane != false) { ?>

            <div class="col-lg-8 col-12 bg-light utilisateurSize ">
                <div class="row m-0 p-0 justify-content-center">
                    <div class="col-lg-2 col-10 m-2">
                        <a href="plane-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                    </div>
                </div>

                <div class="row m-3 p-0 justify-content-center">
                    <div class="col-lg-11 col-12 text-center">
                        <p class="fontTitle text-center m-3 p-2 fs-5  ligneModify "> Avion </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12">
                        <div class="row roundColor justify-content-evenly rounded m-3 mb-5 ">
                            <div class="col-lg-5 col-12 text-center p-2">
                                <img class=" img-fluid mt-3 " src="../public/img/<?= $plane['plane_picture'] ?>" alt="" srcset="">
                            </div>
                            <div class="col-lg-5 col-12">
                                <p class="fs-5 mt-4">Nom : <b><?= $plane['plane_name'] ?></b></p>
                                <p class="fs-5">taille : <b><?= $plane['plane_size'] ?> M</b></p>
                                <p class="fs-5">Portée : <b><?= $plane['plane_scope'] ?> KM</b></p>
                                <p class="fs-5">Altitude max : <b><?= $plane['plane_altitude'] ?></b></p>
                                <p class="fs-5">Vitesse max : <b><?= $plane['plane_speed'] ?></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <p class="text-center fs-5 mt-5 border border-dark bg-light fontTitle p-3">veuillez sélectionner un avion valide</p>
                    <div class="row m-0 p-0 justify-content-center">
                        <div class="col-lg-2 col-10 m-2">
                            <a href="plane-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

    <?php include '../elements/footer.php' ?>
</body>

</html>