<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('../controllers/controller-list-one-user.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/user.php');
?>

<?php include '../elements/meta.php' ?>

    <div class="row m-0 p-0">
        <div class="col-lg-2 mt-2">
            <a href="user-list.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <p class="fs-5 text-center mt-5 fontTitle">LISTE DES UTILISATEURS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">mail</th>
                        <th scope="col">role</th>


                    </tr>
                </thead>
                <tbody class="p-5">


                    <tr>
                        <th class="pt-3 fontText"><?= $users['user_id'] ?></th>
                        <td class="pt-3 fontText"><?= $users['user_lastname'] ?></td>
                        <td class="pt-3 fontText"><?= $users['user_firstname'] ?></td>
                        <td class="pt-3 fontText"><?= $users['user_phone'] ?></td>
                        <td class="pt-3 fontText"><?= $users['user_mail'] ?></td>
                        <td class="pt-3 fontText"><?= $users['role_name'] ?></td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

    <?php include '../elements/footer.php' ?>
