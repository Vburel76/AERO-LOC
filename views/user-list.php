<?php
session_start();
require_once('../controllers/controller-list-user.php');
?>

<?php include '../elements/meta.php' ?>


<body class="d-flex flex-column min-vh-100">
<a href="admin.php">Retour</a>

    <p class="fs-2 text-center m-5">LISTE DES UTILISATEURS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">info</th>
                        <th scope="col">modifier</th>
                        <th scope="col">supprimer</th>

                    </tr>
                </thead>
                <tbody class="p-5">
                    <?php
                    foreach ($users as $value) { ?>
                        <tr>
                            <th class="pt-3"><?= $value['user_id'] ?></th>
                            <td class="pt-3"><?= $value['user_lastname'] ?></td>
                            <td class="pt-3"><?= $value['user_firstname'] ?></td>
                            <td class="pt-3"><?= $value['user_phone'] ?></td>
                            <td><a href="" class="btn btn-primary">+ info</a></td>
                            <td><a href="" class="btn btn-secondary">modifier</a></td>
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user-<?= $value['user_id'] ?>">Supprimer</button>
                            </td>
                        </tr>



                    <?php } ?>



                </tbody>
            </table>
            <?php
            foreach ($users as $value) { ?>

                <!-- Modal -->
                <div class="modal fade" id="user-<?=$value['user_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimez ? </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                                <form action="" method="POST">
                                    <button type="button" class="btn btn-primary" name="delete" value="<?= $value['user_id'] ?>" onclick="document.location='user-list.php?user_id=<?= $value['user_id'] ?>'">oui</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>


    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>