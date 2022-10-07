<?php
session_start()
?>
<?php include '../elements/meta.php' ?>

<?php
require_once '../controllers/controller-formulaire.php';
?>

<body class=" d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 col-12 bg-light formularUser">
            <p class="text-center fs-5 m-2 fontTitle">FORMULAIRE :</p>
            <form action="#" method="POST" novalidate enctype="multipart/form-data">
                <div class="row justify-content-center m-4 p-0 ">
                    <div class="col-lg-11 col-12">
                        <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                            <div class="col-lg-5 col-10 p-1 rounded">
                                <label for="pictureProfil">Photo de Profil</label><span class="ms-2 text-danger"><?= isset($errors['pictureProfil']) ? $errors['pictureProfil'] : '' ?></span>
                                <img class="img-fluid my-2" id="imgPreview">
                                <input id="pictureProfil" name="pictureProfil" class="tailleInput " type="file" value="">

                                <label for="lastname" class="fontText">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                                <input id="lastname" name="lastname" class="tailleInput " type="text" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">

                                <label for="firstname" class="mt-2 fontText">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                                <input id="firstname" name="firstname" class="tailleInput" type="text" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">


                                <label for="mail" class="mt-2 fontText">Mail</label><span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                                <input name="mail" id="mail" class="tailleInput" type="email" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">


                                <label for="mobile" class="fontText">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobile']) ? $errors['mobile'] : '' ?></span>
                                <input id="mobile" name="mobile" class="tailleInput" type="tel" value="<?= isset($_POST['mobile']) ? $_POST['mobile'] : '' ?>">



                                <label for="password" class="fontText">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                                <input id="password" name="password" class="tailleInput" type="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">

                                <label for="confirmPassword" class="fontText">Confirmation mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></span>
                                <input id="confirmPassword" name="confirmPassword" class="tailleInput" type="password">
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
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-2 col-10 mt-3  m-2">
                    <a href="login.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JS permettant d'avoir un apercu de l'image lors du choix de l'input
        let inputPicture = document.getElementById('pictureProfil')
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