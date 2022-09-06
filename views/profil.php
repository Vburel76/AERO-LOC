<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-profil.php';
?>

<body>

    <header class="text-center m-0 d-lg-block d-none">
        <!-- <h1>Aero-Loc</h1> -->
    </header>
<a href="compte.php">Retour</a>

    <form action="#" method="POST" novalidate>
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="lastname">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                        <input id="lastname" name="lastname" class="tailleInput " type="text" >

                        <label for="firstname" class="mt-2">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                        <input id="firstname" name="firstname" class="tailleInput" type="text" >


                        <label for="mobile">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobile']) ? $errors['mobile'] : '' ?></span>
                        <input id="mobile" name="mobile" class="tailleInput" type="tel" >

                        <label for="mobile">Ancien mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['mobileUser']) ? $errors['mobileUser'] : '' ?></span>
                        <input id="mobile" name="mobile" class="tailleInput" type="password" >

                        <label for="mobile">Nouveau mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                        <input id="mobile" name="mobile" class="tailleInput" type="password" >

                        <label for="mobile">Confirmer le nouveau mot de passe </label><span class="ms-2 text-danger"><?= isset($errors['confirmPassword']) ? $errors['confirmPassword'] : '' ?></span>
                        <input id="mobile" name="mobile" class="tailleInput" type="password">





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