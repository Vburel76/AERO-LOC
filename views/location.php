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

                        <a href="validate.php?id=<?= $key ?>" class="btn btn-primary">
                            Louer
                        </a>

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