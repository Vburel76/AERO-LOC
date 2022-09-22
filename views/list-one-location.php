<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-list-one-location.php');
?>

<?php include '../elements/meta.php' ?>


    <div class="row m-0 p-0">
        <div class="col-lg-2 m-2">
            <a href="list-location.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <p class="fs-5 fontTitle text-center m-5">LOCATIONS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <div class="row">
                <div class="col-lg-12  mb-5 rounded roundColor">
                    <div class="row">
                        <div class="col-lg-6 p-3">
                            <img class="pictureOneLocation text-center" src="../public/img/<?= $location['plane_picture'] ?>" alt="" srcset="">
                        </div>

                        <div class="col-lg-6 ">
                            <p class="fs-5 fw-bold fontTitle">Detail sur l'avion:</p>

                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <p class="text-start fs-5 m-1 fw-bold text-center">Modèle :</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class=" fs-5 m-1 textColor2"> <?= $location['plane_name'] ?></p>
                                </div>
                            </div>


                            <div class="row justify-content-center m-0 p-0">
                                <div class="col-lg-6 ">
                                    <p class="text-start fontText">Date de depart : <?= $location['location_start'] ?></p>
                                    <p class="text-start fontText">Lieu de depart : <?= $location['location_departure'] ?></p>

                                </div>
                                <div class="col-lg-6 ">
                                    <p class="text-start fontText">période : <?= $location['location_periode'] ?></p>
                                    <p class="text-start fontText">Lieu d'arrivée : <?= $location['location_arrival'] ?></p>
                                </div>
                            </div>
                            <p class="fs-5 fw-bold fontTitle">Detail sur le client :</p>

                            <div class="row m-0 p-0 justify-content-center rounded  roundColor">
                                <div class="col-lg-5">
                                    <p class="text-start fontText m-2">Nom : <?= $location['user_lastname'] ?></p>
                                </div>
                                <div class="col-lg-5">
                                    <p class="text-start fontText m-2">Prénom : <?= $location['user_firstname'] ?></p>
                                </div>
                            </div>
                            <div class="row justify-content-end mt-3 ">

                                <div class="col-lg-3">
                                    <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id_role'] == 1) { ?>
                                        <form method="POST" action="">
                                            <input type="hidden" name="change" value="<?= $location['location_validate'] ?>">
                                            <button href="" type="submit" class="btn buttontheme m-1" <?= $location['location_validate'] == 1 ? 'disabled' : ''  ?>>Valider</button>
                                        </form>
                                    <?php } ?>
                                </div>

                                <div class="col-lg-3">
                                    <a href="modif-loc.php?locationId=<?= $location['location_id'] ?>" type="button" class="btn buttontheme m-1 ">modifier</a>
                                </div>
                                <div class="col-lg-3">
                                    <button type="button" class="btn buttontheme m-1" data-bs-toggle="modal" data-bs-target="#location-<?= $location['location_id'] ?>">Supprimer</button>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Modal -->
                    <div class="modal fade" id="location-<?= $location['location_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimez ? </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                                    <form action="" method="POST">
                                        <button type="button" class="btn btn-primary" name="delete" onclick="document.location='list-one-location.php?delete=<?= $location['location_id'] ?>'">oui</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <?php include '../elements/footer.php' ?>
