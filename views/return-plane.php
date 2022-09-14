<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('../controllers/controller-return-plane.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/plane.php');
?>

<?php include '../elements/meta.php' ?>



<body class="d-flex flex-column min-vh-100">
    <a href="plane-list.php">Retour</a>

    <p class="fs-2 text-center m-5">DETAIL AVION</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Taille</th>
                        <th scope="col">Portée</th>
                        <th scope="col">Autonomie</th>
                        <th scope="col">Altitude</th>
                        <th scope="col">Vitesse</th>
                        <th scope="col">Description</th>
                        <th scope="col">Description de la location</th>


                    </tr>
                </thead>
                <tbody class="p-5">


                    <tr>
                        <th class="pt-3 align-middle"><?= $plane['plane_id'] ?></th>
                        <td class="pt-3 align-middle"><img class="pictureLocation" src="../public/img/<?= $plane['plane_picture'] ?>" alt="" srcset=""></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_name'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_size'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_scope'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_autonomy'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_altitude'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_speed'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_description'] ?></td>
                        <td class="pt-3 align-middle"><?= $plane['plane_loc_description'] ?></td>
                    </tr>


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