<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '../controllers/controller-validate.php';
?>

<?php include '../elements/meta.php' ?>

    <header class="text-center">
        Aero-Loc
    </header>
    <?php include '../elements/navBar.php' ?>

    <div class="row m-0 p-0">
        <div class="container cardColor col-10 col-lg-11 mt-3 mb-3">
            <div class="row m-3">
                <div class="col-lg-6 col-12">
                    <div class=" text-center mt-4 d-flex justify-content-center  ">
                        <img class="imageFlotteVal" src="../public/img/<?= $plane['plane_picture'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <p class="textColor2 fontTitle"><?= $plane['plane_name'] ?></p>

                        <p class="fontText">En fonction de votre expérience, vous pourrez être lâché sur nos machines après un éventuel ré-entrainement et un test réalisé par un de nos instructeurs.</p>
                    </div>

                    <form action="#" method="POST" novalidate>
                        <div class="row justify-content-evenly mt-5">
                            <div class="col-lg-5">
                                <label for="dateStart" class="fontText textColor2" for="start">Date de départ :</label><br>
                                <span class="text-danger"><?= isset($errors['dateStart']) ? $errors['dateStart'] : '' ?></span>
                                <input id="dateStart" name="dateStart" class="mt-3 fs-5" type="date" id="start" name="trip-start" min=<?= date('Y-m-d')?>>
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
                                    <p class="fontText mb-1 mt-3"> Lieu départ :</p>
                                    <span class="text-danger"><?= isset($errors['departure']) ? $errors['departure'] : '' ?></span>
                                    <div class="input-group">
                                        <span for="departure" class="input-group-text Textcolor"><i class="bi bi-geo-alt-fill"></i></span>
                                        <input id="departure" name="departure" type="text" class="form-control" type="text" autocomplete="off" placeholder="de">
                                    </div>
                                </div>
                                <div class="col-lg-5 ">
                                    <p class="fontText mb-1 mt-3">Lieu arrivée :</p>
                                    <span class="text-danger"><?= isset($errors['arrival']) ? $errors['arrival'] : '' ?></span>
                                    <div class="input-group">
                                        <span for="arrival" class="input-group-text Textcolor"><i class="bi bi-geo-alt-fill"></i></span>
                                        <input id="arrival" name="arrival" type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="vers" data-next-input="date">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-5">
                                <a class="btn Textcolor mt-5 m-2">Annuler</a>
                                <input type="submit" class="btn  Textcolor mt-5 m-2" value="valider">
                            </div>
                    </form>
                </div>

            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-lg-11">
                <p class="text-danger">Date indisponible :</p>
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
                                <td class="align-middle"><?= $value['location_start'] ?></td>
                                <td class="align-middle"><?= $value['location_periode'] ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>
