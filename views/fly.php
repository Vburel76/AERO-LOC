<?php
require_once '../data/table.php';
?>

<?php include '../elements/meta.php' ?>

<body>

    <?php include '../elements/navBar.php' ?>





    <section class="row justify-content-center backgroundFly m-0 p-0">
        <article class="col-lg-8 text-light p-3">
            <p class="text-center fs-2  fontTitle ">Louer un de nos avion</p>
            <p class="fs-4 textFly fontText ">Aero-Loc propose un large choix de modèle d'avion qui sera mis à votre disposition en fonction de votre experience , sinon un réentrainement sur le modèle souhaité vous sera proposez.Dans tous les cas une heures de vol avec instructeur sera obligatoire pour tous les nouveaux clients.Votre sécuritée est notre principale préocupation.Une licence de pilotage en cours de validitée est évidament indispensable pour pouvoir louer nos avions,nous vous proposons également d'obtenir cette licence.</p>
            <p class="fs-4 fontText ">Nos avions sont régulierements entretenus selon la reglementation en vigueur en France.<br>Si vous avez la moindre question vous pouvez nous contacter.</p>
            <p class="fs-4 fontText "> La flotte se compose de :</p>
            <div class="row">
                <div class="col-12">
                    <li>1 Robin DR400</li>
                    <li>1 Socata TBM-700</li>
                    <li>2 G120A</li>
                    <li>2 Cirrus SR-22</li>
                    <li>1 Cessna 172</li>
                    <li>1 Cessna 182</li>
                </div>
            </div>
        </article>

    </section>

    <h1 class="text-center mt-4 fontTitle presentationColor m-5">Présentation de la flotte</h1>

    <?php
    $start = 1;

    foreach ($tableFly as $key => $value) {
        if (($start % 2) == 0) { ?>
            <div class="row mx-0 p-0 justify-content-center espaceFly">
                <div class="col-lg-11 col-11 Textcolor p-3 ">
                    <div class="row m-0 p-0 ">
                        <div class="col-lg-3 col-12 p-0 m-0 ">
                            <img class="imageFlotte" src="../public/img/<?= $value['planeImgVal'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body col-lg-9  col-9  ">
                            <p class="card-text fs-2 mx-3 fontTitle"><?= $value['title'] ?></p>
                            <div class="fs-4 mx-3 fontText">
                                <p>Le Robin DR400 est un avion de tourisme monomoteur très utilisé dans les aéroclubs, produit par la société Robin Aircraft, anciennement appelée Avions Pierre Robin.</p>
                            </div>
                            <div class="row justify-content-evenly fontText  m-0 p-0">
                                <ul class="col-lg-3 col-11   mx-3 ">
                                    <li class="fs-5">Taille :<?= $value['size'] ?></li>
                                    <li class="fs-5">Places :<?= $value['place'] ?></li>
                                    <li class="fs-5">portée :<?= $value['scope'] ?></li>
                                </ul>
                                <ul class="col-lg-4 col-11  mx-3 ">
                                    <li class="fs-5">Autonomie :<?= $value['autonomy'] ?></li>
                                    <li class="fs-5">Altitude max :<?= $value['altitude'] ?></li>
                                    <li class="fs-5">Vitesse Max :<?= $value['speed'] ?></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>

            <!-- second block  -->

            <div class="row m-0 p-0 justify-content-center espaceFly">
                <div class="col-lg-11 col-11 Textcolor p-3">
                    <div class="row m-0 p-0 ">
                        <div class="col-lg-3 col-12 p-0 m-0  d-lg-none d-block">
                            <img class="imageFlotte" src="../public/img/<?= $value['planeImgVal'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body col-lg-9 col-9  ">
                            <p class="card-text fs-2 mx-1 fontTitle"><?= $value['title'] ?></p>
                            <div class="fs-4 mx-1 fontText">
                                <p>Le Robin DR400 est un avion de tourisme monomoteur très utilisé dans les aéroclubs, produit par la société Robin Aircraft, anciennement appelée Avions Pierre Robin.</p>
                            </div>
                            <div class="row justify-content-evenly fontText m-0 p-0">
                                <ul class="col-lg-4 col-11  ">
                                    <li class="fs-5">Taille :<?= $value['size'] ?></li>
                                    <li class="fs-5">Places :<?= $value['place'] ?></li>
                                    <li class="fs-5">portée :<?= $value['scope'] ?></li>
                                </ul>
                                <ul class="col-lg-4 col-11  mx-3 ">
                                    <li class="fs-5">Autonomie :<?= $value['autonomy'] ?></li>
                                    <li class="fs-5">Altitude max :<?= $value['altitude'] ?></li>
                                    <li class="fs-5">Vitesse Max :<?= $value['speed'] ?></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-12 p-0 m-0  d-lg-block d-none">
                            <img class="imageFlotte" src="../public/img/<?= $value['planeImgVal'] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        $start++;
        ?>
    <?php } ?>

    <p class="text-center fs-3 presentationColor fontTitle">1 Simulateur ALSIM AL250</p>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-12 fontText">
            <p>Nous vous proposons également un simulateur Certifié FNPT II pour pouvoir vous entrainez le mieux possible et ainsi pouvoir etre opérationel rapidement.Modélisant nos 6 avions, pratiquez aussi bien des tours de pistes que des approches RNP, de jour, de nuit, avec toutes les conditions météos possibles.</p>
        </div>
        <div class="col-lg-6">

        </div>
    </div>








    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>