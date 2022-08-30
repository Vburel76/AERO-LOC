<?php
session_start();
require_once('../controllers/controller-logout.php');
?>
<?php include '../elements/meta.php' ?>

<body>
    <header class="myHeader bg-light">
        <h1 class="text-center ">Clinique</h1>
    </header>

    <p>Bien Déconnecté</p>

    <a href="login.php" class="btn btn-danger">Retour</a>

</body>
<?php include '../elements/footer.php' ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../dist/js/lightbox-plus-jquery.js"></script>
<script src="../dist/js/lightbox.js"></script>
</body>

</html>