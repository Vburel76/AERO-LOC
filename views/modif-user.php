<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '../controllers/controller-modif-user.php';

?>

<body>

    <header class="text-center m-0 d-lg-block d-none">
        <!-- <h1>Aero-Loc</h1> -->
    </header>
<a href="user-list.php">Retour</a>

    <form action="#" method="POST" novalidate>
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="lastnameUser">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastnameUser']) ? $errors['lastnameUser'] : '' ?></span>
                        <input id="lastnameUser" name="lastnameUser" class="tailleInput " type="text" value="<?= $infoUser['user_lastname']?>">

                        <label for="firstname" class="mt-2">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                        <input id="firstname" name="firstname" class="tailleInput" type="text" value="<?= $infoUser['user_firstname']?>">


                        <label for="mobile">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobileUser']) ? $errors['mobileUser'] : '' ?></span>
                        <input id="mobile" name="mobile" class="tailleInput" type="tel" value="<?= $infoUser['user_phone']?>">



                        <label for="selectUser" class="mt-3">Domaine</label><span class="ms-2 text-danger"><?= isset($errors['selectUser']) ? $errors['selectUser'] : '' ?></span>
                        <br>
                        <select class="mt-3" name="selectUser" id="selectUser">
                            <option value=""> -- Veuillez selectionner une option -- </option>
                            <?php foreach ($roleArray as $value) {  ?>
                                <option value="<?= $value['role_id'] ?>" <?= $value['role_id'] == $infoUser['role_id'] ?  'selected' : '' ?>><?= $value['role_name'] ?></option>
                            <?php } ?>
                        </select>

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