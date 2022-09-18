<?php
session_start();
require_once('../controllers/controllers-plane-list.php');
?>

<?php include '../elements/meta.php' ?>


<body class="d-flex flex-column min-vh-100">
<div class="row m-0 p-0">
        <div class="col-lg-2 m-2">
            <a href="admin.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>

    <p class="fs-2 text-center m-5">LISTE DES AVIONS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="pictureSize" scope="col">#</th>
                        <th class="pictureSize" scope="col">image</th>
                        <th class="pictureSize" scope="col">Nom</th>
                        <th class="pictureSize" scope="col">Description</th>
                        <th class="pictureSize" scope="col"></th>
                        <th class="pictureSize" scope="col"></th>
                        <th class="pictureSize" scope="col"></th>

                    </tr>
                </thead>
                <tbody class="p-5">
                    <?php
                    foreach ($planes as $value) { ?>
                        <tr>
                            <td class="align-middle"><?= $value['plane_id'] ?></td>
                            <td class="align-middle"><img class="pictureLocation" src="../public/img/<?= $value['plane_picture'] ?>" alt="image d'avion"></td>
                            <td class="align-middle"><?= $value['plane_name'] ?></td>
                            <td class="align-middle"><?= $value['plane_loc_description'] ?></td>
                            <td class="align-middle"><a href="modif-plane.php?planeId=<?= $value['plane_id'] ?>" class="btn buttontheme">Modifier</a></td>
                            <td class="align-middle"><a href="return-plane.php?planeId=<?= $value['plane_id'] ?>" class="btn buttontheme">Info</a></td>
                            <td class="align-middle">
                                <button type="button" class="btn buttontheme" data-bs-toggle="modal" data-bs-target="#plane-<?= $value['plane_id'] ?>">Supprimer</button>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>


            <?php
            foreach ($planes as $value) { ?>

                <!-- Modal -->
                <div class="modal fade" id="plane-<?= $value['plane_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modalTheme">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimez l'avion <?= $value['plane_name'] ?> </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="img-fluid" src="../public/img/<?= $value['plane_picture'] ?>" srcset="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn buttontheme" data-bs-dismiss="modal">non</button>
                                <form action="" method="POST">
                                    <button type="button" class="btn buttontheme" name="delete" onclick="document.location='plane-list.php?delete=<?= $value['plane_id'] ?>'">oui</button>
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