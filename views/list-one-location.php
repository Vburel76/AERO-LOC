<?php
session_start();
require_once('../controllers/controller-list-one-location.php');
?>

<?php include '../elements/meta.php' ?>


<body class="d-flex flex-column min-vh-100">
    <div class="row">
        <div class="col-lg-2 m-2">
            <a href="list-location.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <p class="fs-2 text-center m-5">LOCATIONS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <div class="row">
                <div class="col-lg-12  mb-5 rounded roundColor">
                    <div class="row">
                        <div class="col-lg-6 p-3">
                            <img class="pictureOneLocation text-center" src="../public/img/<?= $location['plane_picture'] ?>" alt="" srcset="">
                        </div>

                        <div class="col-lg-6 ">
                            <p class="fs-5 fw-bold">Detail sur l'avion:</p>

                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    <p class="text-start fs-5 m-1 fw-bold text-center">Modèle :</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class=" fs-5 m-1 textColor2"> <?= $location['plane_name'] ?></p>
                                </div>
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-lg-6 ">
                                    <p class="text-start ">Date de depart : <?= $location['location_start'] ?></p>
                                    <p class="text-start ">Lieu de depart : <?= $location['location_departure'] ?></p>

                                </div>
                                <div class="col-lg-6 ">
                                    <p class="text-start">Date d'arrivée : <?= $location['location_end'] ?></p>
                                    <p class="text-start">Lieu d'arrivée : <?= $location['location_arrival'] ?></p>
                                </div>
                            </div>
                            <p class="fs-5 fw-bold ">Detail sur le client :</p>

                            <div class="row m-0 p-0 justify-content-center rounded  roundColor">
                                <div class="col-lg-5">
                                    <p class="text-start  m-2 ">Nom : <?= $location['user_lastname'] ?></p>
                                </div>
                                <div class="col-lg-5">
                                    <p class="text-start m-2">Prénom : <?= $location['user_firstname'] ?></p>
                                </div>
                            </div>
                            <div class="row justify-content-end mt-3 ">
                                <div class="col-lg-3">
                                    <a href="modif-loc.php?locationId=<?= $location['location_id'] ?>" type="button" class="btn buttontheme ">modifier</a>
                                </div>
                                <div class="col-lg-3">
                                    <a type="button" class="btn buttontheme">supprimer</a>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>