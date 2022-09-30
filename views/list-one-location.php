<?php include '../elements/meta.php' ?>
<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-list-one-location.php');
?>



<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 bg-light  p-0">

            <div class="row m-0 p-0">
                <div class="col-lg-2 m-2">
                    <a href="list-location.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                </div>
            </div>

            <div class="row m-3 p-0 justify-content-center ">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-3 ligneLocation "> LOCATION </p>
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="col-lg-11 col-11 rounded roundColor p-2 m-2">
                    <div class="row">
                        <div class="col-lg-6 p-3 text-center">
                            <img class="pictureOneLocation text-center" src="../public/img/<?= $location['plane_picture'] ?>" alt="" srcset="">
                        </div>

                        <div class="col-lg-6 mt-5">
                            <p class="fs-5 fw-bold fontTitle">Detail sur l'avion:</p>
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <p class="text-start  m-2">Modèle : <b><?= $location['plane_name'] ?></b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p class="m-2">Altitude max : <b><?= $location['plane_altitude'] ?> KM</b></p>
                                    <p class="m-2">Vitesse max : <b><?= $location['plane_speed'] ?> KM/H</b></p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="m-2">Portée : <b><?= $location['plane_scope'] ?> KM</b> </p>
                                    <p class="m-2">Autonomie : <b><?= $location['plane_autonomy'] ?> H</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="m-2">Description : <b><?= $location['plane_description'] ?></b></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12 m-2 ">
                            <p class="fs-5 fw-bold fontTitle">Detail sur le client :</p>
                        </div>
                        <div>
                            <div class="row m-2 p-0 justify-content-center">
                                <div class="col-lg-5">
                                    <p class="text-start fontText m-2">Nom : <b><?= $location['user_lastname'] ?></b></p>
                                    <p class="text-start fontText m-2">Mail : <b><?= $location['user_mail'] ?></b></p>
                                </div>
                                <div class="col-lg-5">
                                    <p class="text-start fontText m-2">Prénom : <b><?= $location['user_firstname'] ?></b></p>
                                    <p class="text-start fontText m-2">Mobile : <b><?= $location['user_phone'] ?></b></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 m-2">
                            <p class="fs-5 fw-bold fontTitle">Detail sur la location :</p>
                        </div>
                    </div>
                    <div class="row m-2 p-0 justify-content-center">
                        <div class="col-lg-5">
                            <p class="text-start fontText m-2">Date : <b><?= $location['location_start'] ?></b></p>
                            <p class="text-start fontText m-2 ">Statut: <b><?= $location['location_validate'] == 1 ? '<span class="text-success">validé</span>' : '<span class="text-danger">En attente</span>'  ?></b></p>
                        </div>
                        <div class="col-lg-5">
                            <p class="text-start fontText m-2">Lieu de départ : <b><?= $location['location_departure'] ?></b></p>
                            <p class="text-start fontText m-2">Lieu d'arrivée : <b><?= $location['location_arrival'] ?></b></p>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5 ">
                        <div class="col-lg-2 col-3 me-2 ">
                            <?php if (isset($_SESSION['user']) && $_SESSION['user']['role_id_role'] == 1) { ?>
                                <form method="POST" action="">
                                    <input type="hidden" name="change" value="<?= $location['location_validate'] ?>">
                                    <button href="" type="submit" class="btn TextcolorPagePlane fontText m-1" <?= $location['location_validate'] == 1 ? 'disabled' : ''  ?>>Valider</button>
                                </form>
                            <?php } ?>
                        </div>

                        <div class="col-lg-2 col-3 me-2 ">
                            <a href="modif-loc.php?locationId=<?= $location['location_id'] ?>" type="button" class="btn TextcolorPagePlane fontText m-1 ">modifier</a>
                        </div>
                        <div class="col-lg-2 col-3 me-2 ">
                            <button type="button" class="btn  TextcolorPagePlane fontText m-1" data-bs-toggle="modal" data-bs-target="#location-<?= $location['location_id'] ?>">Supprimer</button>
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
</body>

<?php include '../elements/footer.php' ?>