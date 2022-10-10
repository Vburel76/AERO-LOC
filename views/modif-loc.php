<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-modif-loc.php';
require_once '../controllers/controller-list-one-location.php';
?>

<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 col-12 bg-light  p-0">

            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-3 ligneModifyLocation "> Modifier </p>
                </div>
            </div>

            <form class="mt-5" action="#" method="POST" novalidate enctype="multipart/form-data">
                <div class="row justify-content-center m-0 p-0 ">
                    <div class="col-lg-6 col-10 roundColor">

                        <div class="row m-0 p-0 justify-content-center">
                            <div class="col-lg-11 col-10">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 col-12 m-2 text-center">
                                        <p class="text-center fs-5"><?= $infoLocation['plane_name'] ?></p>
                                        <img class="pictureModifLocation" src="../public/img/<?= $infoLocation['plane_picture'] ?>" alt="" srcset="">
                                    </div>

                                    <label for="modifDateLoc" class="mt-2">Date de départ</label><span class="ms-2 text-danger"><?= isset($errors['modifDateLoc']) ? $errors['modifDateLoc'] : '' ?>
                                    </span>
                                    <input id="modifDateLoc" name="modifDateLoc" class="tailleInput " type="date" value="<?= $infoLocation['location_start'] ?>">

                                    <label for="periode" class="mt-2">Période de la journée</label><span class="ms-2 text-danger"><?= isset($errors['periode']) ? $errors['periode'] : '' ?></span>
                                    <select name="periode" id="periode" value="<?= $infoLocation['location_periode'] ?>">
                                        <option value="">--Période de la journée--</option>
                                        <option value="Matin" <?= $infoLocation['location_periode'] == "Matin" ?  'selected' : '' ?>>Matin</option>
                                        <option value="Après-Midi" <?= $infoLocation['location_periode'] == "Après-Midi" ?  'selected' : '' ?>>Après-Midi</option>
                                        <option value="Journée" <?= $infoLocation['location_periode'] == "Journée" ?  'selected' : '' ?>>Journée</option>
                                    </select>


                                    <label for="departureModifLoc" class="mt-2">lieu de départ</label><span class="ms-2 text-danger"><?= isset($errors['departureModifLoc']) ? $errors['departureModifLoc'] : '' ?></span>
                                    <select name="departureModifLoc" id="departureModifLoc" value="<?= $infoLocation['location_departure'] ?>">
                                        <option value="">--Lieu de départ--</option>
                                        <option value="Rouen" <?= $infoLocation['location_departure'] == "Rouen" ?  'selected' : '' ?>>Rouen</option>
                                        <option value="Le Havre" <?= $infoLocation['location_departure'] == "Le Havre" ?  'selected' : '' ?>>Le Havre</option>
                                        <option value="Caen" <?= $infoLocation['location_departure'] == "Caen" ?  'selected' : '' ?>>Caen</option>
                                    </select>


                                    <label for="arrivalModifLoc">lieu d'arrivée</label><span class="ms-2 text-danger"><?= isset($errors['arrivalModifLoc']) ? $errors['arrivalModifLoc'] : '' ?></span>
                                    <select name="arrivalModifLoc" id="arrivalModifLoc" value="<?= $infoLocation['location_arrival'] ?>">
                                        <option value="">--Lieu de départ--</option>
                                        <option value="Rouen" <?= $infoLocation['location_arrival'] == "Rouen" ?  'selected' : '' ?>>Rouen</option>
                                        <option value="Le Havre" <?= $infoLocation['location_arrival'] == "Le Havre" ?  'selected' : '' ?>>Le Havre</option>
                                        <option value="Caen" <?= $infoLocation['location_arrival'] == "Caen" ?  'selected' : '' ?>>Caen</option>
                                    </select>
                                </div>
                                <div class="row justify-content-center m-0 p-0">
                                    <div class="col-lg-4 m-2">
                                        <a href="list-one-location.php?locationId=<?= $location['location_id'] ?>" type="submit" class="btn fontColor btnSize p-1">annuler</a>
                                    </div>
                                    <div class="col-lg-4 m-2">
                                        <input href="list-one-location.php?locationId=<?= $location['location_id'] ?>" type="submit" class="btn fontColor btnSize p-1" value="valider">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 p-0 justify-content-center ">
                        <div class="col-lg-2 col-10 mt-3  m-2">
                            <a href="list-one-location.php?locationId=<?= $location['location_id'] ?>" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <?php include '../elements/footer.php' ?>
</body>

</html>