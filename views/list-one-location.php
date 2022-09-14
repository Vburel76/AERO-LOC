<?php
session_start();
require_once('../controllers/controller-list-one-location.php');
?>

<?php include '../elements/meta.php' ?>


<body class="d-flex flex-column min-vh-100">
    <a href="admin.php">Retour</a>

    <p class="fs-2 text-center m-5">LOCATIONS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="pictureSize" scope="col">#</th>
                        <th class="pictureSize" scope="col">Image</th>
                        <th class="pictureSize" scope="col">Avion</th>
                        <th class="pictureSize" scope="col">date de départ</th>
                        <th class="pictureSize" scope="col">date d'arrivée</th>
                        <th class="pictureSize" scope="col">Nom</th>
                        <th class="pictureSize" scope="col">Prénom</th>
                        <th class="pictureSize" scope="col"></th>

                    </tr>
                </thead>
                <tbody class="p-5">

                    <tr>
                        <td class="align-middle"><?= $location['location_id'] ?></td>
                        <td class="align-middle "><img class="pictureLocation" src="../public/img/<?= $location['plane_picture'] ?>" alt="" srcset=""></td>
                        <td class="align-middle "><?= $location['plane_id'] ?></td>
                        <td class="align-middle "><?= $location['location_start'] ?></td>
                        <td class="align-middle"><?= $location['location_end'] ?></td>
                        <td class="align-middle"><?= $location['user_lastname'] ?></td>
                        <td class="align-middle"><?= $location['user_firstname'] ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-lg-12 border border-dark">
                    <div class="row">
                        <div class="col-lg-6 border border-dark p-3">
                            <img class="pictureOneLocation" src="../public/img/<?= $location['plane_picture'] ?>" alt="" srcset="">
                        </div>

                        <div class="col-lg-6 border border-dark">
                            <p class="fs-5">Detail sur l'avion:</p>

                            <p class="text-start">Modèle :</p>

                            <div class="row justify-content-center">
                                <div class="col-lg-6 border border-dark">
                                    <p class="text-start">Date de depart : <?= $location['location_start']?></p>
                                </div>
                                <div class="col-lg-6 border border-dark">
                                    <p class="text-start" >Date de depart : <?= $location['location_end']?></p>
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