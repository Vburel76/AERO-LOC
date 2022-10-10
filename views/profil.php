<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
?>
<?php
require_once '../controllers/controller-profil.php';
?>
<?php include '../elements/meta.php' ?>

<?php include '../elements/navBar.php' ?>



<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 bg-light p-0">
            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="text-center fs-5 mt-5 fontTitle ligneprofil"> Modifier le profil </p>
                </div>
            </div>
            <form action="#" method="POST" novalidate enctype="multipart/form-data">
                <div class="row justify-content-center m-0 p-0 ">
                    <div class="col-lg-10 col-12">
                        <div class="row justify-content-center m-3 p-0 pt-2 rounded roundColor">
                            <div class="col-lg-5 col-10 p-1 rounded">
                                <label for="pictureProfil">Photo de Profil</label><span class="ms-2 text-danger"><?= isset($errors['pictureProfil']) ? $errors['pictureProfil'] : '' ?></span>
                                <img class=" img-fluid mt-3 mb-3" src="../public/img/<?= $infoUser['user_picture_profil'] ?>" alt="">
                                <input id="pictureProfil" name="pictureProfil" class="tailleInput " type="file" value="<?= $infoUser['user_picture_profil']  ?>">


                                <label for="lastname">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                                <input id="lastname" name="lastname" class="tailleInput " type="text" value="<?= $infoUser['user_lastname'] ?>">

                                <label for="firstname" class="mt-2">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                                <input id="firstname" name="firstname" class="tailleInput" type="text" value="<?= $infoUser['user_firstname'] ?>">


                                <label for="mobile">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobile']) ? $errors['mobile'] : '' ?></span>
                                <input id="mobile" name="mobile" class="tailleInput" type="tel" value="<?= $infoUser['user_phone'] ?>">

                            </div>
                            <div class="row justify-content-center m-0 p-0">
                                <div class="col-lg-3 col-10  m-4">
                                    <input type="submit" class="btn fontColor btnSize" value="Valider">
                                </div>
                            </div>
                        </div>
                        <div class="row m-0 p-0 justify-content-center ">
                            <div class="col-lg-2 col-10 mt-3  m-2">
                                <a href="compte.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <?php include '../elements/footer.php' ?>

</body>

</html>