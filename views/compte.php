<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-compte.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/user.php');
?>
<?php
include '../elements/meta.php';
var_dump($user);
?>



<body>
    <header class="text-center">
        Aero-Loc
    </header>

    <?php include '../elements/navBar.php' ?>

    <div class="row justify-content-center m-0 p-0">
        <div class="col-lg-5 fs-4 mt-3 text-center ">

            <p class="m-3">Nom : <?= strtoupper($user['user_lastname']); ?></p>
            <p class="m-3">Prénom : Valentin</p>

        </div>

        <div class="row justify-content-center m-0 p-0">
            <div class="col-lg-3 text-center col-10 m-3">
                <a class="p-2 buttontheme" href="profil.php">Modifier le profil</a>
            </div>
        </div>
    </div>











    <?php include '../elements/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>