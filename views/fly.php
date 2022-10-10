<?php
require_once '../data/table.php';
require_once '../controllers/controllers-fly.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php include '../elements/meta.php' ?>

<?php include '../elements/navBar.php' ?>


<body class=" d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-11 col-12 bg-light  p-0">
            <div class="flyBackground d-lg-block d-none">
            </div>
            <section class="row justify-content-center m-0 p-0 ">
                <article class="col-lg-10 col-12 p-3 ">
                    <p class="text-center fs-4  fontTitle ">Louer un de nos avions</p>
                    <p class=" textFly fontText textJust ">Aero-Loc propose un large choix de modèle d'avion qui sera mis à votre disposition en fonction de votre experience , sinon un réentraînement sur le modèle souhaité vous sera proposez.Dans tous les cas une heure de vol avec instructeur sera obligatoire pour tous les nouveaux clients. Votre sécurité est notre principale préocupation.Une licence de pilotage en cours de validité est évidemment indispensable pour pouvoir louer nos avions , nous vous proposons également d'obtenir cette licence.</p>
                    <p class=" fontText textJust ">Nos avions sont régulièrement entretenus selon la réglementation en vigueur en France.<br>Si vous avez la moindre question vous pouvez nous contacter.</p>
                </article>

            </section>

            <div class="row m-0 p-0 justify-content-center">
                <div class="col-lg-11 col-11">
                    <p class="text-center m-3 p-2 fs-3 fontTitle ligneflotte"> Présentation de la flotte </p>
                </div>
            </div>
            <div class="row m-0 p-0 justify-content-center">
                <?php foreach ($planes as $value) { ?>
                    <div class="col-lg-10 col-11 flyColor mt-3">
                        <div class="row ">
                            <div class="col-lg-4 col-12">
                                <div class="col-lg-12 col-12 m-0 text-center p-4">
                                    <img class=" text-center img-fluid" src="../public/img/<?= $value['plane_picture'] ?>" alt="" srcset="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-12 p-4">
                                <h2 class="fs-5 fw-bold fontTitle presentationColor"><?= $value['plane_name'] ?></h2>
                                <ul class="mt-3">
                                    <li class="m-0 ">La taille est de <b><?= $value['plane_size'] ?>m</b></li>
                                    <li class="m-0 ">Sa portée est de <b><?= $value['plane_scope'] ?> km</b></li>
                                    <li class="m-0 ">Sa vitesse est de <b><?= $value['plane_speed'] ?> km/h</b></li>
                                    <li class="m-0 ">Son altitude maximum <b><?= $value['plane_altitude'] ?> km/h</b></li>
                                    <li class="m-0 ">Son autonomie est de <b><?= $value['plane_autonomy'] ?> h</b></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-12 px-4">
                                <p class="fw-bold h5">Description :</p>
                                <p class="textJust"><?= $value['plane_description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>




            <p class="text-center m-3 p-2 fs-3 fontTitle ligne"> 1 Simulateur ALSIM AL250 </p>

            <section class="row justify-content-center m-3">
                <article class="col-lg-5 col-12 textSimulateur textJust fontText mt-3  m-0">
                    <p>Nous vous proposons également un simulateur certifié FNPT II pour pouvoir vous entrainez le mieux possible et ainsi pouvoir être opérationnel rapidement. Modélisant nos 6 avions, pratiquez aussi bien des tours de pistes que des approches RNP, de jour, de nuit, avec toutes les conditions météos possibles.</p>

                    <li>Simulateur cabine : Angle de vue HD 250° Horizontal, 49° vertical. Manche de pilotage type “volant” 3 axes avec moteurs couples sur tous les axes. Deux sièges en cabine.</li>
                    <br>
                    <li>3 Modèles de vol : SEP train tricycle/pas fixe, SEP train rentrant/pas variable, MEP (bimoteur) train rentrant/pas variable.</li>
                    <br>
                    <li>Avionique: Instrumentation classique ou glass-cockpit, selon la configuration choisie avant le vol.</li>
                    <br>
                    <li>Certification : Le simulateur est “certifiable” auprès de la DSAC. Pour l’instant, les démarches n’ont pas été engagées donc les heures de vols ne peuvent pas être enregistrées dans le carnet de vol du pilote.</li>
                </article>
                <div class="col-lg-5 col-12 mt-3">
                    <img class="imageFlotte" src="../public/img/simulateur.jpg" alt="simulateur.jpg">
                </div>
            </section>
        </div>
    </div>
</body>

<?php include '../elements/footer.php' ?>