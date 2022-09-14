<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}

?>

<body class="d-flex flex-column min-vh-100">

<h1 class="text-center mt-5">AJOUTER UNE LOCATION</h1>

    <form class="mt-5" action="#" method="POST" novalidate>
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="namePlane">Nom de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['namePlane']) ? $errors['namePlane'] : '' ?>
                        </span>
                        <input id="namePlane" name="namePlane" class="tailleInput " type="text" value="">

                        <label for="size" class="mt-2">taille de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['size']) ? $errors['size'] : '' ?></span>
                        <input id="size" name="size" class="tailleInput" type="text" value="">


                        <label for="scope" class="mt-2">portée</label><span class="ms-2 text-danger"><?= isset($errors['scope']) ? $errors['scope'] : '' ?></span>
                        <input name="scope" id="scope" class="tailleInput" type="text" value="">


                        <label for="autonomy">autonomie</label><span class="ms-2 text-danger"><?= isset($errors['autonomy']) ? $errors['autonomy'] : '' ?></span>
                        <input id="autonomy" name="autonomy" class="tailleInput" type="tel" value="">



                        <label for="altitude" class="">altitude max</label><span class="ms-2 text-danger"><?= isset($errors['altitude']) ? $errors['altitude'] : '' ?></span>
                        <input id="altitude" name="altitude" class="tailleInput" type="text" value="">

                        <label for="speed" class="">vitesse max</label><span class="ms-2 text-danger"><?= isset($errors['speed']) ? $errors['speed'] : '' ?></span>
                        <input id="speed" name="speed" class="tailleInput" type="text">



                        <label for="description" class="">description</label><span class="ms-2 text-danger"><?= isset($errors['description']) ? $errors['description'] : '' ?></span>
                        <input id="description" name="description" class="tailleInput" type="text">



                    </div>


                    <div class="row justify-content-center m-0 p-0">
                        <div class="col-lg-3  m-4">
                            <input type="submit" class="btn fontColor btnSize" value="valider">
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </form>

    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>