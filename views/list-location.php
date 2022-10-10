<?php
session_start();
require_once('../controllers/controller-list-location.php');
?>

<?php include '../elements/meta.php' ?>
<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-8 bg-light p-0">
            <div class="row m-3 p-0 justify-content-center">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-3 ligneLocation "> Locations </p>
                </div>
            </div>

            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="table-responsive">
                        <label class="m-2 fw-bold">Recherche par nom:</label>
                        <input class="rounded" id="myInput" placeholder="ex: burel" onkeyup="myFunction()" type="text" />
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th class="pictureSize" scope="col">#</th>
                                        <th class="pictureSize" scope="col">Image</th>
                                        <th class="pictureSize" scope="col">Avion</th>
                                        <th class="pictureSize" scope="col">Date de départ</th>
                                        <th class="pictureSize" scope="col">Période</th>
                                        <th class="pictureSize" scope="col">Nom</th>
                                        <th class="pictureSize" scope="col">Prénom</th>
                                        <th class="pictureSize" scope="col">Statut</th>
                                        <th class="pictureSize" scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody class="p-5">
                                    <?php
                                    foreach ($location as $value) { ?>
                                        <tr class="search-list">
                                            <td class="align-middle"><?= $value['location_id'] ?></td>
                                            <td class="align-middle "><img class="pictureLocation" src="../public/img/<?= $value['plane_picture'] ?>" alt="" srcset=""></td>
                                            <td class="align-middle "><?= $value['plane_name'] ?></td>
                                            <td class="align-middle "><?= date_format(date_create($value['location_start']), "d/m/Y") ?></td>
                                            <td class="align-middle"><?= $value['location_periode'] ?></td>
                                            <td class="align-middle"><?= $value['user_lastname'] ?></td>
                                            <td class="align-middle"><?= $value['user_firstname'] ?></td>
                                            <td class="align-middle"><?= $value['location_validate'] == 1 ? '<span class="text-success">validé</span>' : '<span class="text-danger">En attente de validation</span>'  ?></td>
                                            <td class="align-middle"><a href="list-one-location.php?locationId=<?= $value['location_id'] ?>" class="btn buttontheme">Info</a></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>

                        </div>
                        <div class="row m-0 p-0 justify-content-center ">
                            <div class="col-lg-2 col-10 mt-3  m-2">
                                <a href="admin.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>


<?php include '../elements/footer.php' ?>
<script src="../public/script/list-location.js"></script>