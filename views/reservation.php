<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-reservation.php');
?>

<?php include '../elements/meta.php' ?>

<body class="d-flex flex-column min-vh-100">
    <div class="row m-0 p-0">
        <div class="col-lg-2 m-2">
            <a href="landing.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <p class="fs-2 text-center m-5">MES RESERVATION</p>

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
                    <?php
                    foreach ($location as $value) { ?>
                        <tr>
                            <td class="align-middle"><?= $value['location_id'] ?></td>
                            <td class="align-middle "><img class="pictureLocation" src="../public/img/<?= $value['plane_picture'] ?>" alt="" srcset=""></td>
                            <td class="align-middle "><?= $value['plane_id'] ?></td>
                            <td class="align-middle "><?= $value['location_start'] ?></td>
                            <td class="align-middle"><?= $value['location_end'] ?></td>
                            <td class="align-middle"><?= $value['user_lastname'] ?></td>
                            <td class="align-middle"><?= $value['user_firstname'] ?></td>
                            <td class="align-middle"><a href="list-one-location.php?locationId=<?= $value['location_id'] ?>" class="btn btn-primary">Info</a></td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>


    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>