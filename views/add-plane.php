<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-addplane.php';
?>

<body class=" d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 col-12 bg-light  p-0">
            <div class="row m-0 p-0 ">
                <div class="col-lg-2 m-2">
                    <a href="admin.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                </div>
            </div>

            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="text-center fs-5 mt-5 fontTitle ligneaddPlane"> Ajouter un avion </p>
                </div>
            </div>

            <form class="mt-3 mb-5" action="#" method="POST" novalidate enctype="multipart/form-data">
                <div class="row justify-content-center m-0 p-0  ">
                    <div class="col-lg-11 col-12">
                        <div class="row justify-content-center mx-5 p-0 pt-2  rounded roundColor">
                            <div class="col-lg-5 col-10 p-1  rounded">

                                <label for="file" class="fontText">Image</label><span class="ms-2 text-danger"><?= isset($errors['fileToUpload']) ? $errors['fileToUpload'] : '' ?></span>
                                <input type="file" name="fileToUpload" id="fileToUpload">

                                <label for="namelocPlane" class="mt-2 fontText">Nom de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['namelocPlane']) ? $errors['namelocPlane'] : '' ?>
                                </span>
                                <input id="namelocPlane" name="namelocPlane" class="tailleInput " type="text" value="">

                                <label for="sizelocPlane" class="mt-2 fontText">taille de l'avion (En M)</label><span class="ms-2 text-danger"><?= isset($errors['sizelocPlane']) ? $errors['sizelocPlane'] : '' ?></span>
                                <input id="sizelocPlane" name="sizelocPlane" class="tailleInput" type="text" value="">


                                <label for="scopelocPlane" class="mt-2 fontText">portée (En Km)</label><span class="ms-2 text-danger"><?= isset($errors['scopelocPlane']) ? $errors['scopelocPlane'] : '' ?></span>
                                <input name="scopelocPlane" id="scopelocPlane" class="tailleInput" type="text" value="">


                                <label for="autonomylocPlane" class="fontText">autonomie (En Heures)</label><span class="ms-2 text-danger"><?= isset($errors['autonomylocPlane']) ? $errors['autonomylocPlane'] : '' ?></span>
                                <input id="autonomylocPlane" name="autonomylocPlane" class="tailleInput" type="tel" value="">



                                <label for="altitudelocPlane" class="fontText">altitude max (En M)</label><span class="ms-2 text-danger"><?= isset($errors['altitudelocPlane']) ? $errors['altitudelocPlane'] : '' ?></span>
                                <input id="altitudelocPlane" name="altitudelocPlane" class="tailleInput" type="text" value="">

                                <label for="speedlocPlane" class="fontText">vitesse max (En Km/h)</label><span class="ms-2 text-danger"><?= isset($errors['speedlocPlane']) ? $errors['speedlocPlane'] : '' ?></span>
                                <input id="speedlocPlane" name="speedlocPlane" class="tailleInput" type="text">



                                <label for="descriptionlocPlane" class="fontText">description de la location</label><span class="ms-2 text-danger"><?= isset($errors['descriptionlocPlane']) ? $errors['descriptionlocPlane'] : '' ?></span>
                                <textarea id="descriptionlocPlane" name="descriptionlocPlane" class="tailleInput" type="text"></textarea>

                                <label for="presentationlocPlane" class="fontText">présentation de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['presentationlocPlane']) ? $errors['presentationlocPlane'] : '' ?></span>
                                <textarea id="presentationlocPlane" name="presentationlocPlane" class="tailleInput" type="text"></textarea>

                            </div>


                            <div class="row justify-content-center mb-3 m-0 p-0">
                                <div class="col-lg-3  m-4">
                                    <input type="submit" class="btn fontColor btnSize" value="valider">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>
<?php include '../elements/footer.php' ?>