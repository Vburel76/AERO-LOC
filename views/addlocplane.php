<?php include '../elements/meta.php' ?>

<?php
session_start();
require_once '../controllers/controller-locplane.php';
?>

<body class="d-flex flex-column min-vh-100">

<h1 class="text-center mt-5">AJOUTER UNE LOCATION</h1>

    <form class="mt-5" action="#" method="POST" novalidate>
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="namelocPlane">Nom de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['namelocPlane']) ? $errors['namelocPlane'] : '' ?>
                        </span>
                        <input id="namelocPlane" name="namelocPlane" class="tailleInput " type="text" value="">

                        <label for="sizelocPlane" class="mt-2">taille de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['sizelocPlane']) ? $errors['sizelocPlane'] : '' ?></span>
                        <input id="sizelocPlane" name="sizelocPlane" class="tailleInput" type="text" value="">


                        <label for="scopelocPlane" class="mt-2">portée</label><span class="ms-2 text-danger"><?= isset($errors['scopelocPlane']) ? $errors['scopelocPlane'] : '' ?></span>
                        <input name="scopelocPlane" id="scopelocPlane" class="tailleInput" type="text" value="">


                        <label for="autonomylocPlane">autonomie</label><span class="ms-2 text-danger"><?= isset($errors['autonomylocPlane']) ? $errors['autonomylocPlane'] : '' ?></span>
                        <input id="autonomylocPlane" name="autonomylocPlane" class="tailleInput" type="tel" value="">



                        <label for="altitudelocPlane" class="">altitude max</label><span class="ms-2 text-danger"><?= isset($errors['altitudelocPlane']) ? $errors['altitudelocPlane'] : '' ?></span>
                        <input id="altitudelocPlane" name="altitudelocPlane" class="tailleInput" type="text" value="">

                        <label for="speedlocPlane" class="">vitesse max</label><span class="ms-2 text-danger"><?= isset($errors['speedlocPlane']) ? $errors['speedlocPlane'] : '' ?></span>
                        <input id="speedlocPlane" name="speedlocPlane" class="tailleInput" type="text">



                        <label for="descriptionlocPlane" class="">description</label><span class="ms-2 text-danger"><?= isset($errors['descriptionlocPlane']) ? $errors['descriptionlocPlane'] : '' ?></span>
                        <input id="descriptionlocPlane" name="descriptionlocPlane" class="tailleInput" type="text">



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