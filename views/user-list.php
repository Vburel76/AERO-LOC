<?php
session_start();
require_once('../controllers/controller-list-user.php');
?>

<?php include '../elements/meta.php' ?>
<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 bg-light p-0">
            <div class="row m-3 p-0 justify-content-center ">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-5 ligneUser "> Utilisateurs </p>
                </div>
            </div>

            <div class="row m-0 p-0 justify-content-center mb-5">
                <div class="col-lg-12 ">
                    <label class="m-2 fw-bold">Recherche par nom:</label>
                    <input type="text" class="rounded" placeholder="ex: Burel" id="myInput" onkeyup="myFunction()">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped text-center">
                            <thead>
                                <tr class="header ">
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">Nom</th>
                                    <th class="text-center" scope="col">Prénom</th>
                                    <th class="text-center" scope="col">Mobile</th>
                                    <th class="text-center" scope="col"></th>
                                    <th class="text-center" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="p-5">
                                <?php
                                foreach ($users as $value) {
                                ?>
                                    <tr class="text-center">
                                        <th class="pt-3"><?= $value['user_id'] ?></th>
                                        <td class="pt-3"><?= $value['user_lastname'] ?></td>
                                        <td class="pt-3"><?= $value['user_firstname'] ?></td>
                                        <td class="pt-3"><?= $value['user_phone'] ?></td>
                                        <td class="text-center">
                                            <a href="list-one-user.php?userId=<?= $value['user_id'] ?>" class="btn buttonthemeGrey m-1 ">+ d'Info</a>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn buttonthemeRed m-1" data-bs-toggle="modal" data-bs-target="#user-<?= $value['user_id'] ?>">Supprimer</button>
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
                    <div class="row m-0 p-0 justify-content-center ">
                        <div class="col-lg-2 col-10 mt-3  m-2">
                            <a href="admin.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include '../elements/footer.php' ?>
<script src="../public/script/user-list.js"></script>