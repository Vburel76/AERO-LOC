<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-modif-loc.php';
require_once '../controllers/controller-list-one-location.php';
?>

<body class="d-flex flex-column min-vh-100">
    <div class="row">
        <div class="col-lg-2 m-2">
            <a href="list-one-location.php?locationId=<?= $location['location_id'] ?>" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <h1 class="text-center mt-5">MODIFIER</h1>

    <form class="mt-5" action="#" method="POST" novalidate enctype="multipart/form-data">
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-3 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">

                        <div class="row justify-content-center">

                            <p class="text-center fs-5"><?= $infoLocation['plane_name'] ?></p>
                            <div class="col-lg-12 m-2 text-center">
                                <img class="pictureModifLocation" src="../public/img/<?= $infoLocation['plane_picture'] ?>" alt="" srcset="">
                            </div>

                            <label for="modifDateLoc" class="mt-2">Date de départ</label><span class="ms-2 text-danger"><?= isset($errors['modifDateLoc']) ? $errors['modifDateLoc'] : '' ?>
                            </span>
                            <input id="modifDateLoc" name="modifDateLoc" class="tailleInput " type="date" value="<?= $infoLocation['location_start'] ?>">

                            <label for="periode" class="mt-2">Période de la journée</label><span class="ms-2 text-danger"><?= isset($errors['periode']) ? $errors['periode'] : '' ?></span>
                            <select  name="periode" id="periode" value="<?= $infoLocation['location_periode'] ?>">
                                <option value="">--Période de la journée--</option>
                                <option value="Matin" <?= $infoLocation['location_periode'] == "Matin" ?  'selected': '' ?>>Matin</option>
                                <option value="Après-Midi" <?= $infoLocation['location_periode'] == "Après-Midi" ?  'selected': '' ?>>Après-Midi</option>
                                <option value="Journée" <?= $infoLocation['location_periode'] == "Journée" ?  'selected': '' ?>>Journée</option>
                            </select>


                            <label for="departureModifLoc" class="mt-2">lieu de départ</label><span class="ms-2 text-danger"><?= isset($errors['departureModifLoc']) ? $errors['departureModifLoc'] : '' ?></span>
                            <input name="departureModifLoc" id="departureModifLoc" class="tailleInput" type="text" value="<?= $infoLocation['location_departure'] ?>">


                            <label for="arrivalModifLoc">lieu d'arrivée</label><span class="ms-2 text-danger"><?= isset($errors['arrivalModifLoc']) ? $errors['arrivalModifLoc'] : '' ?></span>
                            <input id="arrivalModifLoc" name="arrivalModifLoc" class="tailleInput" type="tel" value="<?= $infoLocation['location_arrival'] ?>">
                        </div>
                        <div class="row justify-content-center m-0 p-0">
                            <div class="col-lg-4 m-2">
                                <a href="list-one-location.php?locationId=<?= $location['location_id'] ?>" type="submit" class="btn fontColor btnSize p-1">annuler</a>
                            </div>
                            <div class="col-lg-4 m-2">
                                <input href="list-location.php" type="submit" class="btn fontColor btnSize p-1" value="valider">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </form>

    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>