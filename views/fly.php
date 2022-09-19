<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '../data/table.php';
require_once '../controllers/controllers-fly.php';
?>

<?php include '../elements/meta.php' ?>

<body>

    <?php include '../elements/navBar.php' ?>

<div class="flyBackground">
</div>
    <section class="row justify-content-center m-0 p-0">
        <article class="col-lg-10 col-12  p-3">
            <p class="text-center fs-4  fontTitle ">Louer un de nos avion</p>
            <p class=" textFly fontText textJust ">Aero-Loc propose un large choix de modèle d'avion qui sera mis à votre disposition en fonction de votre experience , sinon un réentrainement sur le modèle souhaité vous sera proposez.Dans tous les cas une heures de vol avec instructeur sera obligatoire pour tous les nouveaux clients.Votre sécuritée est notre principale préocupation.Une licence de pilotage en cours de validitée est évidament indispensable pour pouvoir louer nos avions,nous vous proposons également d'obtenir cette licence.</p>
            <p class=" fontText textJust ">Nos avions sont régulierements entretenus selon la reglementation en vigueur en France.<br>Si vous avez la moindre question vous pouvez nous contacter.</p>
        </article>

    </section>

    <h1 class="text-center mt-4 fontTitle m-4">Présentation de la flotte</h1>


    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-11 ">
            <div class="row justify-content-evenly m-5">
                <?php foreach ($planes as $value) { ?>

                    <div class="col-lg-3 m-2 ">
                        <div class="row">
                            <p class="fs-4 fw-bold fontTitle presentationColor"><?= $value['plane_name'] ?></p>
                            <div class="col-lg-12 m-0 p-0 flyWidth">
                                <img class="flyPlane text-center" src="../public/img/<?= $value['plane_picture']?>" alt="" srcset="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="textJust"><?= $value['plane_description'] ?></p>
                            </div>
                            <div class="col-lg-12 textJust mt-3 p-0 fontText">
                                <ul>
                                    <li class="m-0 ">La taille est de <b><?= $value['plane_size'] ?>m</b></li>
                                    <li class="m-0 ">Sa portée est de <b><?= $value['plane_scope'] ?> km</b></li>
                                    <li class="m-0 ">Sa vitesse est de <b><?= $value['plane_speed'] ?> km/h</b></li>
                                    <li class="m-0 ">Son altitude maximum <b><?= $value['plane_altitude'] ?> km/h</b></li>
                                    <li class="m-0 ">Son autonomie est de <b><?= $value['plane_autonomy'] ?> h</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>


    </div>




    <p class="text-center fs-5  fontTitle">1 Simulateur ALSIM AL250</p>

    <section class="row justify-content-center m-3">
        <article class="col-lg-5 col-12 textSimulateur textJust fontText mt-3  m-0">
            <p>Nous vous proposons également un simulateur Certifié FNPT II pour pouvoir vous entrainez le mieux possible et ainsi pouvoir etre opérationel rapidement.Modélisant nos 6 avions, pratiquez aussi bien des tours de pistes que des approches RNP, de jour, de nuit, avec toutes les conditions météos possibles.</p>

            <li>Simulateur cabine : Angle de vue HD 250° Horizontal, 49° vertical. Manche de pilotage type “volant” 3 axes avec moteurs couples sur tous les axes. Deux siéges en cabine.</li>
            <br>
            <li>3 Modèles de vol : SEP train tricycle/pas fixe, SEP train rentrant/pas variable, MEP (bimoteur) train rentrant/pas variable.</li>
            <br>
            <li>Avionique: Instrumentation classique ou glass-cockpit, selon la configuration choisie avant le vol.</li>
            <br>
            <li>Certification : Le simulateur est “certifiable” auprès de la DSAC. Pour l’instant les démarches n’ont pas été engagées donc les heures de vols ne peuvent pas être enregistrées dans le carnet de vol du pilote.</li>
        </article>
        <div class="col-lg-5 col-12 mt-3">
            <img class="imageFlotte" src="../public/img/simulateur.jpg" alt="simulateur.jpg">
        </div>
    </section>

    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>