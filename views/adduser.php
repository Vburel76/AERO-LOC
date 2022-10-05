<?php include '../elements/meta.php' ?>
<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
?>

<?php require_once '../controllers/controller-adduser.php'; ?>

<?php include '../elements/navBar.php' ?>


<body class=" d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 col-12 bg-light  p-0">


            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="text-center fs-5 mt-5 fontTitle ligneaddUser"> Ajouter un utilisateur </p>
                </div>
            </div>


            <form action="#" method="POST" novalidate enctype="multipart/form-data">
                <div class="row justify-content-center mx-4 p-0">
                    <div class="col-lg-12">
                        <div class="row justify-content-center m-0 pt-3 rounded roundColor">
                            <div class="col-lg-5 col-11 p-1 rounded">
                                <span class="ms-2 text-danger d-block"><?= isset($errors['pictureProfil']) ? $errors['pictureProfil'] : '' ?></span>
                                <label class="fontText" for="pictureProfil">Photo de Profil</label>
                                <input id="pictureProfil" name="pictureProfil" class="tailleInput mb-2 me-3" type="file" value="">

                                <label for="lastname" class="fontText">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                                <input id="lastname" name="lastname" class="tailleInput mb-2" type="text" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">

                                <label for="firstname" class="fontText">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                                <input id="firstname" name="firstname" class="tailleInput mb-2" type="text" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">


                                <label for="mail" class="fontText">Mail</label><span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                                <input name="mail" id="mail" class="tailleInput mb-2" type="email" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">


                                <label for="mobile" class="fontText">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobile']) ? $errors['mobile'] : '' ?></span>
                                <input id="mobile" name="mobile" class="tailleInput mb-2" type="tel" value="<?= isset($_POST['mobile']) ? $_POST['mobile'] : '' ?>">



                                <label for="password" class="fontText">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                                <input id="password" name="password" class="tailleInput mb-2" type="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">

                                <label for="confirmPassword" class="fontText">Confirmation mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></span>
                                <input id="confirmPassword" name="confirmPassword" class="tailleInput mb-2" type="password">
                            </div>
                            <div class="row justify-content-center m-0 p-0">
                                <div class="col-lg-3  m-4">
                                    <input type="submit" class="btn fontColor btnSize" value="Valider">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0 justify-content-center ">
                            <div class="col-lg-2 col-10 mt-3  m-2">
                                <a href="admin.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<?php include '../elements/footer.php' ?>