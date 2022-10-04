<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '../controllers/controller-modif-user.php';
?>
<?php include '../elements/meta.php' ?>
<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">


    <?php if ($infoUser != false) { ?>
        <div class="col-lg-6 bg-light modifUser ">
            <div class="row m-0 p-0">
                <div class="col-lg-2 m-2">
                    <a href="user-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                </div>
            </div>

            <div class="row m-3 p-0 justify-content-center ">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-5  ligneModify "> Modification </p>
                </div>
            </div>
            <form action="#" method="POST" novalidate>
                <div class="row justify-content-center  m-0 p-0 ">
                    <div class="col-lg-6">
                        <div class="row justify-content-center m-0 p-0  rounded roundColor">
                            <div class="col-lg-8 p-1 rounded">
                                <label for="lastnameUser" class="fontText">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastnameUser']) ? $errors['lastnameUser'] : '' ?></span>
                                <input id="lastnameUser" name="lastnameUser" class="tailleInput " type="text" value="<?= $infoUser['user_lastname'] ?>">

                                <label for="firstname" class="mt-2 fontText">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                                <input id="firstname" name="firstname" class="tailleInput" type="text" value="<?= $infoUser['user_firstname'] ?>">


                                <label for="mobile" class="fontText">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobileUser']) ? $errors['mobileUser'] : '' ?></span>
                                <input id="mobile" name="mobile" class="tailleInput" type="tel" value="<?= $infoUser['user_phone'] ?>">

                                <label for="selectUser" class="mt-3 fontText">Role</label><span class="ms-2 text-danger"><?= isset($errors['selectUser']) ? $errors['selectUser'] : '' ?></span>
                                <br>
                                <select class="mt-3 tailleInput" name="selectUser" id="selectUser">
                                    <option value=""> -- Veuillez selectionner une option -- </option>
                                    <?php foreach ($roleArray as $value) {  ?>
                                        <option value="<?= $value['role_id'] ?>" <?= $value['role_id'] == $infoUser['role_id'] ?  'selected' : '' ?>><?= $value['role_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row justify-content-center m-0 p-0">
                                <div class="col-lg-5  m-4">
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
                    <p class="text-center fs-5 mt-5 border border-dark bg-light fontTitle p-3">veuillez un utilisateur valide</p>
                    <div class="row m-0 p-0 justify-content-center">
                        <div class="col-lg-2 col-10 m-2">
                            <a href="user-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                        </div>
                    </div>
                </div>
            </div> 
            <?php }?>


    </div>
</body>
<?php include '../elements/footer.php' ?>