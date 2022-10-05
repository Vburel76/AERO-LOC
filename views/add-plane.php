<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-addplane.php';
?>

<body class=" d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 col-12 bg-light p-0">

            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="text-center fs-5 mt-5 fontTitle ligneaddPlane"> Ajouter un avion </p>
                </div>
            </div>

            <form class="mt-3 mb-5" action="#" method="POST" novalidate enctype="multipart/form-data">
                <div class="row justify-content-center m-0 p-0">
                    <div class="col-lg-11 col-12">
                        <div class="row justify-content-center mx-5 p-0 pt-3 rounded roundColor">
                            <div class="col-lg-5 col-10 p-1 rounded">
                                <span class="ms-2 text-danger d-block"><?= isset($errors['fileToUpload']) ? $errors['fileToUpload'] : '' ?></span>
                                <label for="file" class="fontText">Ajout d'une Image</label>
                                <img class="img-fluid my-2" id="imgPreview">
                                <input type="file" name="fileToUpload" id="fileToUpload" class="mb-3">

                                <label for="namelocPlane" class="mt-2 fontText">Nom de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['namelocPlane']) ? $errors['namelocPlane'] : '' ?>
                                </span>
                                <input id="namelocPlane" name="namelocPlane" class="tailleInput mb-2 me-3" type="text" value="">

                                <label for="sizelocPlane" class="mt-2 fontText">Taille de l'avion (En m)</label><span class="ms-2 text-danger"><?= isset($errors['sizelocPlane']) ? $errors['sizelocPlane'] : '' ?></span>
                                <input id="sizelocPlane" name="sizelocPlane" class="tailleInput mb-2 me-3" type="text" value="">


                                <label for="scopelocPlane" class="mt-2 fontText">Portée (En Km)</label><span class="ms-2 text-danger"><?= isset($errors['scopelocPlane']) ? $errors['scopelocPlane'] : '' ?></span>
                                <input name="scopelocPlane" id="scopelocPlane" class="tailleInput mb-2 me-3" type="text" value="">


                                <label for="autonomylocPlane" class="fontText">Autonomie (En Heures)</label><span class="ms-2 text-danger"><?= isset($errors['autonomylocPlane']) ? $errors['autonomylocPlane'] : '' ?></span>
                                <input id="autonomylocPlane" name="autonomylocPlane" class="tailleInput mb-2 me-3" type="tel" value="">



                                <label for="altitudelocPlane" class="fontText">Altitude max (En m)</label><span class="ms-2 text-danger"><?= isset($errors['altitudelocPlane']) ? $errors['altitudelocPlane'] : '' ?></span>
                                <input id="altitudelocPlane" name="altitudelocPlane" class="tailleInput mb-2 me-3" type="text" value="">

                                <label for="speedlocPlane" class="fontText">Vitesse max (En Km/h)</label><span class="ms-2 text-danger"><?= isset($errors['speedlocPlane']) ? $errors['speedlocPlane'] : '' ?></span>
                                <input id="speedlocPlane" name="speedlocPlane" class="tailleInput mb-2 me-3" type="text">



                                <label for="descriptionlocPlane" class="fontText">Description de la location</label><span class="ms-2 text-danger"><?= isset($errors['descriptionlocPlane']) ? $errors['descriptionlocPlane'] : '' ?></span>
                                <textarea id="descriptionlocPlane" name="descriptionlocPlane" class="tailleInput mb-3" type="text"></textarea>

                                <label for="presentationlocPlane" class="fontText">Présentation de l'avion</label><span class="ms-2 text-danger"><?= isset($errors['presentationlocPlane']) ? $errors['presentationlocPlane'] : '' ?></span>
                                <textarea id="presentationlocPlane" name="presentationlocPlane" class="tailleInput mb-3" type="text"></textarea>

                            </div>


                            <div class="row justify-content-center mb-3 m-0 p-0">
                                <div class="col-lg-3  m-4">
                                    <input type="submit" class="btn fontColor btnSize" value="Valider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0 justify-content-center ">
                    <div class="col-lg-2 col-10 mt-3  m-2">
                        <a href="admin.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        // JS permettant d'avoir un apercu de l'image lors du choix de l'input
        let inputPicture = document.getElementById('fileToUpload')
        inputPicture.addEventListener("change", function() {
            let oFReader = new FileReader(); // on créé un nouvel objet FileReader
            oFReader.readAsDataURL(this.files[0]);
            oFReader.onload = function(oFREvent) {
                let imgPreview = document.getElementById('imgPreview');
                console.log(oFREvent.target.result)
                imgPreview.setAttribute('src', oFREvent.target.result);
            };
        })
    </script>
    <?php include '../elements/footer.php' ?>
</body>

</html>