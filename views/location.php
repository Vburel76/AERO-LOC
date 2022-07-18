<?php
require_once '../data/table.php';
?>

<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center">
        Aero-Loc
    </header>
    <?php include '../elements/navBar.php' ?>

    <section class="row m-0 p-0 justify-content-center border border-dark">
        <article class="col-lg-8 border border-dark">
            <p class="fs-3 text-center">Louer un avion privé depuis l'aéroport d'octeville</p>
            <p>Vous pouvez louer nos avions pour un ou plusieurs jours. Le préalable indispensable est une heure de vol avec un instructeur d'Aero-Loc afin de valider vos capacités au pilotage de l'appareil.</p>
        </article>

    </section>

    <div class="border border-dark d-flex justify-content-center">
        <div class="row col-lg-10 col-12 m-0 p-0 justify-content-center ">
            <?php
            foreach ($tableFly as $key => $value) { ?>
                <div class="card mt-4 m-5 " style="width: 20rem;">
                    <img src="../public/img/<?= $value['planeImgLoc'] ?>" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['title'] ?></h5>
                        <p class="card-text text-start"><?= $value['textCard'] ?></p>
                        <p class="card-text">Nombre de places : <?= $value['place'] ?></p>
                        <p class="card-text">Portée de l'avion : <?= $value['scope'] ?></p>
                        <p class="card-text">Altitude max :<?= $value['altitude'] ?></p>

                        <!-- Button trigger modal -->
                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $key ?>">
                            Louer
                        </a>

                        <!-- Modal -->
                        <div class="modal fade " id="modal<?= $key ?>" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle"><?= $value['title'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col  text-center">
                                                <img src="../public/img/<?= $value['planeImgLoc'] ?>">
                                            </div>
                                            <div class="col ">
                                                <div class="row">
                                                    <div class="col">
                                                        <p>date souhaitée :</p>
                                                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
                                                    </div>
                                                    <div class="col">
                                                        <p>Nombre de passagés :</p>
                                                        <input type="number" id="tentacles" name="tentacles" min="0" max="4">
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 ">
                                                        <p>départ :</p>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                                                            <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="de" data-next-input="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 ">
                                                        <p>arrivée :</p>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                                                            <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="vers" data-next-input="date">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                                        <button type="button" class="btn btn-primary">Valider</button>
                                    </div>
                                </div>
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
</body>

</html>