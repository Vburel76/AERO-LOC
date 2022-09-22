<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-logout.php');
?>

<?php include '../elements/meta.php' ?>

<body>
    <header class="myHeader bg-light">
        <h1 class="text-center">Aero-Loc</h1>
    </header>
    <div class="row justify-content-center m-0 p-0">
        <div class="col-lg-6 text-center m-5 p-3 rounded modalTheme">
            <p class="fs-5 fontTitle">Bien Déconnecté</p>
            <a href="login.php" class="btn buttontheme">Retour</a>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
    <?php include '../elements/footer.php' ?>
</body>

</html>