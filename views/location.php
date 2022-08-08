<?php
require_once '../data/table.php';
?>

<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center">
        Aero-Loc
    </header>
    <?php include '../elements/navBar.php' ?>

    <section class="row m-0 p-5 justify-content-center">
        <article class="col-lg-8">
            <p class="fs-3 text-center textColor2 fontTitle">Louer un avion privé depuis l'aéroport d'octeville</p>
            <p class="fontText">Vous pouvez louer nos avions pour un ou plusieurs jours. Le préalable indispensable est une heure de vol avec un instructeur d'Aero-Loc afin de valider vos capacités au pilotage de l'appareil.</p>
            <p class="fontText">Pour annuler une réservation il est posible de le faire jusqu'à 24 heures avant le vol .</p>
        </article>
    </section>

    <div class="row m-0 p-0">
        <div class="col p-0">
            <img class="imgLocation" src="../public/img/Location.jpg" alt="">
        </div>
    </div>

    <p class="fs-3 fontTitle textColor2 text-center mt-4 ">Les locations</p>

    <div class="d-flex justify-content-center">
        <div class="row col-lg-10 col-12 m-0 p-0 justify-content-center ">
            <?php
            foreach ($tableFly as $key => $value) { ?>
                <div class="card mt-4 m-5 cardColor" style="width: 20rem;">
                    
                    <img src="../public/img/<?= $value['planeImgLoc'] ?>" class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title textColor2 fontTitle"><?= $value['title'] ?></h5>
                        <p class="card-text text-start fontText"><?= $value['textCard'] ?></p>
                        <p class="card-text fontText">Nombre de places : <?= $value['place'] ?></p>
                        <p class="card-text fontText">Portée de l'avion : <?= $value['scope'] ?></p>
                        <p class="card-text fontText">Altitude max :<?= $value['altitude'] ?></p>

                        <a href="validate.php?id=<?= $key ?>" class="btn Textcolor fontText">
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