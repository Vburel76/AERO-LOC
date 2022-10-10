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

            <div class="row m-3 p-0 justify-content-center ">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-3 ligneLocation "> Location </p>
                </div>
            </div>



            <div class="row m-0 p-0 justify-content-center">

                <?php if ($location != false) { ?>
                    <div class="col-lg-11 col-11 rounded roundColor p-2 m-2">
                        <div class="row">
                            <div class="col-lg-6 p-3 text-center">
                                <img class="pictureOneLocation text-center" src="../public/img/<?= $location['plane_picture'] ?>" alt="" srcset="">
                            </div>

                            <div class="col-lg-6 mt-2">
                                <p class="fs-5 fw-bold fontTitle">Détail sur l'avion: </p>
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <p class="text-start  m-2">Modèle : <b><?= $location['plane_name'] ?></b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <p class="m-2">Altitude max : <b><?= $location['plane_altitude'] ?> Km</b></p>
                                        <p class="m-2">Vitesse max : <b><?= $location['plane_speed'] ?> Km/h</b></p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="m-2">Portée : <b><?= $location['plane_scope'] ?> Km</b> </p>
                                        <p class="m-2">Autonomie : <b><?= $location['plane_autonomy'] ?> h</b></p>
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
                                <p class="fs-5 fw-bold fontTitle">Détail sur le client :</p>
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
                                <p class="fs-5 fw-bold fontTitle">Détail sur la location :</p>
                            </div>
                        </div>
                        <div class="row m-2 p-0 justify-content-center">
                            <div class="col-lg-5">
                                <p class="text-start fontText m-2">Date : <b><?= date_format(date_create($location['location_start']), "d/m/Y") ?></b></p>
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
                                <a href="modif-loc.php?locationId=<?= $location['location_id'] ?>" type="button" class="btn TextcolorPagePlaneGrey fontText m-1 ">Modifier</a>
                            </div>
                            <div class="col-lg-2 col-3 me-2 ">
                                <button type="button" class="btn  TextcolorPagePlaneRed fontText m-1" data-bs-toggle="modal" data-bs-target="#location-<?= $location['location_id'] ?>">Supprimer</button>
                            </div>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" id="location-<?= $location['location_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content modalTheme">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimez la location ? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><b>Nom :</b> <?= $location['user_lastname'] ?></p>
                                        <p><b>Prenom :</b> <?= $location['user_firstname'] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn buttontheme" data-bs-dismiss="modal">non</button>
                                        <form action="" method="POST">
                                            <button type="button" class="btn buttontheme" name="delete" onclick="document.location='list-one-location.php?delete=<?= $location['location_id'] ?>'">oui</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row m-0 p-0 justify-content-center ">
                        <div class="col-lg-2 col-10 mt-3  m-2">
                            <a href="reservation.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                        </div>
                    </div>

                <?php } else { ?>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 ">
                            <p class="text-center fs-5 mt-5 border border-dark bg-light fontTitle p-3">veuillez sélectionner une location valide</p>
                            <div class="row m-0 p-0 justify-content-center">
                                <div class="col-lg-3 col-10 m-2">
                                    <a href="reservation.php" type="submit" class="btn fontColor btnSize p-2">Retour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if (isset($_SESSION['swal'])) { ?>
                <script>
                    Swal.fire({
                        icon: '<?= $_SESSION['swal']['icon'] ?>',
                        title: '<?= $_SESSION['swal']['title'] ?>',
                        text: '<?= $_SESSION['swal']['text'] ?>'
                    })
                </script>
            <?php
                unset($_SESSION['swal']);
            } ?>
        </div>
    </div>
    <?php include '../elements/footer.php' ?>
</body>

</html>