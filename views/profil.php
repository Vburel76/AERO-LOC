<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
?>

<?php
require_once '../controllers/controller-profil.php';
?>
<?php include '../elements/meta.php' ?>



<body>

    <header class="text-center m-0 d-lg-block d-none">
        <!-- <h1>Aero-Loc</h1> -->
    </header>
    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-2 col-10 m-2">
            <a href="compte.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>

        <form action="#" method="POST" novalidate enctype="multipart/form-data">
            <div class="row justify-content-center m-0 p-0 ">
                <div class="col-lg-6 col-12">
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

                            <label for="lastpassword">Ancien mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['lastpassword']) ? $errors['lastpassword'] : '' ?></span>
                            <input id="lastpassword" name="lastpassword" class="tailleInput" type="password">

                            <label for="password">Nouveau mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                            <input id="password" name="password" class="tailleInput" type="password">

                            <label for="confirmPassword">Confirmer le nouveau mot de passe </label><span class="ms-2 text-danger"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></span>
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

        <?php include '../elements/footer.php' ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="../dist/js/lightbox-plus-jquery.js"></script>
        <script src="../dist/js/lightbox.js"></script>
</body>

</html>