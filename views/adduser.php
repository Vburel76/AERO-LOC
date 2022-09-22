<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}

require_once '../controllers/controller-adduser.php';
?>

    <div class="row m-0 p-0">
        <div class="col-lg-2 m-2">
            <a href="admin.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <p class="text-center mt-5 fontTitle">AJOUTER UN UTILISATEUR</p>

    <form class="mt-5" action="#" method="POST" novalidate>
        <div class="row justify-content-center m-0 p-0 ">
            <div class="col-lg-6">
                <div class="row justify-content-center m-0 p-0 pt-2 rounded roundColor">
                    <div class="col-lg-5 p-1 rounded">
                        <label for="lastname" class="fontText">Nom</label><span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
                        <input id="lastname" name="lastname" class="tailleInput " type="text" value="">

                        <label for="firstname" class="mt-2 fontText">prénom</label><span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
                        <input id="firstname" name="firstname" class="tailleInput" type="text" value="">


                        <label for="mobile" class="mt-2 fontText">mobile</label><span class="ms-2 text-danger"><?= isset($errors['mobile']) ? $errors['mobile'] : '' ?></span>
                        <input name="mobile" id="mobile" class="tailleInput" type="text" value="">


                        <label for="mail" class="fontText">mail</label><span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                        <input id="mail" name="mail" class="tailleInput" type="tel" value="">



                        <label for="password" class="fontText">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                        <input id="password" name="password" class="tailleInput" type="password" value="">

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

    <?php include '../elements/footer.php' ?>
