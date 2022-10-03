<?php
session_start();
require_once('../controllers/controller-list-user.php');
?>

<?php include '../elements/meta.php' ?>
<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">

    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 bg-light p-0">
            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-2 col-12 m-2">
                    <a href="admin.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
                </div>
            </div>

            <div class="row m-3 p-0 justify-content-center ">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-5 ligneUser "> Utilisateurs </p>
                </div>
            </div>

            <div class="row m-0 p-0 justify-content-center mb-5">
                <div class="col-lg-12 ">
                <label class="m-2 fw-bold">entrer le nom de l'utilisateur:</label>
                    <input type="text" class="rounded" id="myInput" onkeyup="myFunction()">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped text-center">
                            <thead>
                                <tr class="header">
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Modification</th>
                                    <th scope="col">information</th>
                                    <th scope="col">supprimer</th>

                                </tr>
                            </thead>
                            <tbody class="p-5">
                                <?php
                                foreach ($users as $value) {
                                     ?>
                                    <tr>
                                        <th class="pt-3"><?= $value['user_id'] ?></th>
                                        <td class="pt-3"><?= $value['user_lastname'] ?></td>
                                        <td class="pt-3"><?= $value['user_firstname'] ?></td>
                                        <td class="pt-3"><?= $value['user_phone'] ?></td>
                                        <td><a href="modif-user.php?users=<?= $value['user_id'] ?>" class="btn buttontheme">modification</a></td>
                                        <td><a href="list-one-user.php?userId=<?= $value['user_id'] ?>" class="btn buttonthemeGrey">+ d'info</a></td>
                                        <td>
                                            <button type="button" class="btn buttonthemeRed" data-bs-toggle="modal" data-bs-target="#user-<?= $value['user_id'] ?>">Supprimer</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    foreach ($users as $value) { ?>

                        <!-- Modal -->
                        <div class="modal fade" id="user-<?= $value['user_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content modalTheme">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimez <?= $value['user_lastname'] . ' ' . $value['user_firstname'] ?> ? </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Confirmez vous la suppression ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn buttontheme " data-bs-dismiss="modal">non</button>
                                        <form action="" method="POST">
                                            <button type="button" class="btn buttontheme" name="delete" value="<?= $value['user_id'] ?>" onclick="document.location='user-list.php?user_id=<?= $value['user_id'] ?>'">oui</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</body>

<?php include '../elements/footer.php' ?>
<script src="../public/script/user-list.js"></script>