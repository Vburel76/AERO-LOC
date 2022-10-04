<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '../controllers/controller-validate.php';
?>

<?php include '../elements/meta.php' ?>

<header class="text-center m-0 d-lg-block d-none">
    <h1 class="AeroLoc">Aero-Loc</h1>
</header>
<?php include '../elements/navBar.php' ?>


<body class=" d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0">
        <?php if ($plane != false) { ?>
            <div class="container cardColor col-10 col-lg-11 mt-3 mb-3 bg-light">
                <div class="row m-3">
                    <div class="col-lg-6 col-12">
                        <div class=" text-center mt-4 d-flex justify-content-center">
                            <img class="imageFlotteVal" src="../public/img/<?= $plane['plane_picture'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <p class="textColor2 fontTitle"><?= $plane['plane_name'] ?></p>

                            <p class="fontText">En fonction de votre expérience, vous pourrez être lâché sur nos machines après un éventuel ré-entraînement et un test réalisé par un de nos instructeurs.</p>
                        </div>

                        <form action="#" method="POST" novalidate>
                            <div class="row justify-content-evenly mt-5">
                                <div class="col-lg-5">
                                    <label for="dateStart" class="fontText textColor2" for="start">Date de départ :</label><br>
                                    <span class="text-danger"><?= isset($errors['dateStart']) ? $errors['dateStart'] : '' ?></span>
                                    <input id="dateStart" name="dateStart" class="mt-3 fs-5" type="date" id="start" name="trip-start" min=<?= date('Y-m-d') ?>>
                                </div>
                                <div class="col-lg-5">
                                    <label for="dateEnd" class="fontText textColor2" for="start">Période de la journée :</label><br>
                                    <span class="text-danger"><?= isset($errors['periode']) ? $errors['periode'] : '' ?></span>
                                    <select class="mt-3 fs-5" name="periode" id="periode">
                                        <option value="">--Période de la journée--</option>
                                        <option value="Matin">Matin</option>
                                        <option value="Après-Midi">Après-Midi</option>
                                        <option value="Journée">Journée</option>
                                    </select>
                                </div>
                                <div class="row  p-0 mt-3 justify-content-evenly">
                                    <div class="col-lg-5 ">
                                        <label for="departure" class="fontText textColor2" for="start">Lieu de départ :</label><br>
                                        <span class="text-danger"><?= isset($errors['departure']) ? $errors['departure'] : '' ?></span>
                                        <select class="mt-3 fs-5" name="departure" id="departure">
                                            <option value="">--Lieu de départ--</option>
                                            <option value="Rouen">Rouen</option>
                                            <option value="Le Havre">Le Havre</option>
                                            <option value="Caen">Caen</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="arrival" class="fontText textColor2" for="start">Lieu d'arrivée :</label><br>
                                        <span class="text-danger"><?= isset($errors['arrival']) ? $errors['arrival'] : '' ?></span>
                                        <select class="mt-3 fs-5" name="arrival" id="arrival">
                                            <option value="">--Lieu d'arrivée--</option>
                                            <option value="Rouen">Rouen</option>
                                            <option value="Le Havre">Le Havre</option>
                                            <option value="Caen">Caen</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-5">
                                    <a href="pagePlane.php" class="btn Textcolor btn TextcolorPagePlane fontText mt-5 m-2">Annuler</a>
                                    <input type="submit" class="btn btn TextcolorPagePlane fontText mt-5 m-2" value="valider">
                                </div>
                        </form>
                    </div>

                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <p class="text-danger">Date indisponible :</p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="pictureSize" scope="col">date de départ</th>
                                    <th class="pictureSize" scope="col">Période</th>

                                </tr>
                            </thead>
                            <tbody class="p-5">
                                <?php
                                foreach ($location as $value) { ?>
                                    <tr>
                                        <td class="align-middle"><?= date_format(date_create($value['location_start']),"d/m/Y") ?></td>
                                        <td class="align-middle"><?= $value['location_periode'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <p class="text-center fs-5 mt-5 border border-dark bg-light fontTitle p-3">veuillez sélectionner un avion valide</p>
                    <div class="row m-0 p-0 justify-content-center">
                        <div class="col-lg-2 col-10 m-2">
                            <a href="pagePlane.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</body>
<?php include '../elements/footer.php' ?>