<?php include '../elements/meta.php' ?>

<?php
session_start();
require_once '../controllers/controller-user.php';
?>

<body class="d-flex flex-column min-vh-100">

<h1 class="text-center mt-5">AJOUTER UN UTILISATEUR</h1>

    <form class="mt-5" action="#" method="POST" novalidate>
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="nameUser">Nom</label><span class="ms-2 text-danger"><?= isset($errors['nameUser']) ? $errors['nameUser'] : '' ?></span>
                        <input id="nameUser" name="nameUser" class="tailleInput " type="text" value="">

                        <label for="firstnameUser" class="mt-2">prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstnameUser']) ? $errors['firstnameUser'] : '' ?></span>
                        <input id="firstnameUser" name="firstnameUser" class="tailleInput" type="text" value="">


                        <label for="phoneUser" class="mt-2">mobile</label><span class="ms-2 text-danger"><?= isset($errors['phoneUser']) ? $errors['phoneUser'] : '' ?></span>
                        <input name="phoneUser" id="phoneUser" class="tailleInput" type="text" value="">


                        <label for="mailUser">mail</label><span class="ms-2 text-danger"><?= isset($errors['mailUser']) ? $errors['mailUser'] : '' ?></span>
                        <input id="mailUser" name="mailUser" class="tailleInput" type="tel" value="">



                        <label for="passwordUser" class="">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['passwordUser']) ? $errors['passwordUser'] : '' ?></span>
                        <input id="passwordUser" name="passwordUser" class="tailleInput" type="text" value="">

                        <label for="comfirmePasswordUser" class="">Confirmation mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['comfirmePasswordUser']) ? $errors['comfirmePasswordUser'] : '' ?></span>
                        <input id="comfirmePasswordUser" name="comfirmePasswordUser" class="tailleInput" type="text">






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