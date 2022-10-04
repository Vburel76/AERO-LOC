<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-modif-plane.php';
?>

<?php include '../elements/meta.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">

        <?php if ($infoPlane != false) { ?>
            <div class="col-lg-6 bg-light ">
                <div class="row m-0 p-0">
                    <div class="col-lg-2 m-2">
                        <a href="plane-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                    </div>
                </div>

                <div class="row m-3 p-0 justify-content-center">
                    <div class="col-lg-11 col-12 text-center">
                        <p class="text-center fs-5 mt-5 fontTitle lignemodifyPlane"> Modifier l'avion </p>
                    </div>
                </div>

                <form class="mt-5" action="#" method="POST" novalidate enctype="multipart/form-data">
                    <div class="row justify-content-center m-2 p-0 ">
                        <div class="col-lg-12 col-12">
                            <div class="row justify-content-center m-0 p-0 pt-2 mb-3 rounded roundColor">
                                <div class="col-lg-7 col-10 p-1 rounded">

                                    <label for="file" class="fontText">Image</label><span class="ms-2 text-danger"><?= isset($errors['fileToUpload']) ? $errors['fileToUpload'] : '' ?></span>
                                    <br>
                                    <img class="pictureModif mt-3 mb-3" src="../public/img/<?= $infoPlane['plane_picture'] ?>" alt="">
                                    <input type="file" name="fileToUpload" id="fileToUpload" value="<?= $infoPlane['plane_picture'] ?>"><br>

                                    <label for="namelocPlane" class="mt-2 fontText">Nom de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['namelocPlane']) ? $errors['namelocPlane'] : '' ?>
                                    </span>
                                    <input id="namelocPlane" name="namelocPlane" class="tailleInput " type="text" value="<?= $infoPlane['plane_name'] ?>">

                                    <label for="sizelocPlane" class="mt-2 fontText">taille de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['sizelocPlane']) ? $errors['sizelocPlane'] : '' ?></span>
                                    <input id="sizelocPlane" name="sizelocPlane" class="tailleInput" type="text" value="<?= $infoPlane['plane_size'] ?>">


                                    <label for="scopelocPlane" class="mt-2 fontText">portée</label><span class="ms-2 text-danger"><?= isset($errors['scopelocPlane']) ? $errors['scopelocPlane'] : '' ?></span>
                                    <input name="scopelocPlane" id="scopelocPlane" class="tailleInput" type="text" value="<?= $infoPlane['plane_scope'] ?>">


                                    <label for="autonomylocPlane" class="fontText">autonomie</label><span class="ms-2 text-danger"><?= isset($errors['autonomylocPlane']) ? $errors['autonomylocPlane'] : '' ?></span>
                                    <input id="autonomylocPlane" name="autonomylocPlane" class="tailleInput" type="tel" value="<?= $infoPlane['plane_autonomy'] ?>">

                                    <label for="altitudelocPlane" class="fontText">altitude max</label><span class="ms-2 text-danger"><?= isset($errors['altitudelocPlane']) ? $errors['altitudelocPlane'] : '' ?></span>
                                    <input id="altitudelocPlane" name="altitudelocPlane" class="tailleInput" type="text" value="<?= $infoPlane['plane_altitude'] ?>">

                                    <label for="speedlocPlane" class="fontText">vitesse max</label><span class="ms-2 text-danger"><?= isset($errors['speedlocPlane']) ? $errors['speedlocPlane'] : '' ?></span>
                                    <input id="speedlocPlane" name="speedlocPlane" class="tailleInput" type="text" value="<?= $infoPlane['plane_speed'] ?>">

                                    <label for="descriptionlocPlane" class="fontText">description de la location</label><span class="ms-2 text-danger"><?= isset($errors['descriptionlocPlane']) ? $errors['descriptionlocPlane'] : '' ?></span>
                                    <textarea id="descriptionlocPlane" name="descriptionlocPlane" class="tailleInput" type="text"><?= $_POST['descriptionlocPlane'] ?? $infoPlane['plane_loc_description'] ?></textarea>

                                    <label for="presentationlocPlane" class="fontText">presentation de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['presentationlocPlane']) ? $errors['presentationlocPlane'] : '' ?></span>
                                    <textarea id="presentationlocPlane" name="presentationlocPlane" class="tailleInput" type="description"> <?=
                                                                                                                                            $_POST['presentationlocPlane'] ?? $infoPlane['plane_description'] ?></textarea>

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
            </div>

        <?php } else { ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <p class="text-center fs-5 mt-5 border border-dark bg-light fontTitle p-3">veuillez sélectionner un avion valide</p>
                    <div class="row m-0 p-0 justify-content-center">
                        <div class="col-lg-2 col-10 m-2">
                            <a href="plane-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

<?php include '../elements/footer.php' ?>