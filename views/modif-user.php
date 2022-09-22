
<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '../controllers/controller-modif-user.php';
?>

<?php include '../elements/meta.php' ?>
    <div class="row m-0 p-0">
        <div class="col-lg-2 m-2">
            <a href="user-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>
<p class="text-center fs-5 mt-5 fontTitle">MODIFIER L'UTILISATEUR</p>
    <form action="#" method="POST" novalidate>
        <div class="row justify-content-center mt-5 m-2 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="lastnameUser" class="fontText">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastnameUser']) ? $errors['lastnameUser'] : '' ?></span>
                        <input id="lastnameUser" name="lastnameUser" class="tailleInput " type="text" value="<?= $infoUser['user_lastname'] ?>">

                        <label for="firstname" class="mt-2 fontText">Prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                        <input id="firstname" name="firstname" class="tailleInput" type="text" value="<?= $infoUser['user_firstname'] ?>">


                        <label for="mobile" class="fontText">Mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobileUser']) ? $errors['mobileUser'] : '' ?></span>
                        <input id="mobile" name="mobile" class="tailleInput" type="tel" value="<?= $infoUser['user_phone'] ?>">



                        <label for="selectUser" class="mt-3 fontText">Role</label><span class="ms-2 text-danger"><?= isset($errors['selectUser']) ? $errors['selectUser'] : '' ?></span>
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
