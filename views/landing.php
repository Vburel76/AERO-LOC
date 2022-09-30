<?php include '../elements/meta.php'; ?>
<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
?>




<body class=" d-flex flex-column min-vh-100 BGlanding">
    <header class="text-center m-0 d-lg-block d-none">
        <h1 class="AeroLoc">Aero-Loc</h1>
    </header>

    <?php include '../elements/navBar.php' ?>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-11 bg-light">


            <section class="row justify-content-center  section1 mt-5 m-0 p-0">

                <article class="col-12 col-lg-5  text-center ">
                    <img class="imageArticle1" src="../public/img/aeroclub.jpg" alt="aeroclub">
                </article>
                <article class="col-lg-5 m-3 p-0 ">
                    <p class=" textJust mt-3 fontText ">AeroLoc n'est pas une compagnie aérienne, mais une société de location d'aéronefs (coque nue) sans pilote pour réaliser vos vols privés et vols d'affaires à prix abordables.<br>
                        La société est fondée en 2015 et implantée près de la ville du Havre.
                        Nous offrons également la possibilité de passer le LAPL et le PPL licences de pilotage obligatoire pour pouvoir piloter un de nos avions .<br>
                        Retrouver sur notre site toutes les informations sur la location et le passage des licences de pilotage.
                    </p>
                    <p class=" fontText">un vol urgent ou un vol vers une destination peu desservie, notre équipe affrète vous accompagne tout au long de la préparation de votre vol.
                    </p>

                    </p>
                </article>
            </section>


            <div class="row justify-content-center">
                <div class="col-lg-11 col-11">
                    <p class="text-center m-1  p-2 fs-3  fontTitle ligneinformation"> Infos </p>

                </div>
            </div>


            <div class="row  m-0 p-0 section1 justify-content-center">

                <section class="row mt-3 justify-content-center m-3">
                    <article class="col-lg-5 col-12 info  p-0 m-1">
                        <p class="fs-5 Textcolor text-center fontTitle">Location</p>
                        <p class="mt-4 fontText px-3">Aero-Loc propose une large gamme de service et notament la location d’avion.
                            En effet apres avoir remplir certaines conditions qui vous serons communiquées , il sera possible de louer un avion pour les itinéraires de votre choix.
                        </p>
                    </article>
                    <article class="col-lg-5 col-12 info  p-0 m-1 ">
                        <p class="fs-5 Textcolor text-center fontTitle">Certification</p>
                        <p class="fontText px-3">Aero-Loc propose également le passsage des certifications necessaires pour pouvoir piloter.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-10 text-center ">
                                <img class="image3" src="../public/img/PPL.jpg" alt="">
                            </div>
                        </div>
                    </article>
                </section>


                <div class="row  justify-content-center mt-2">

                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-11">
                            <p class="text-center m-1 p-2 fs-3 fs-3 fontTitle  lignetarif"> Tarifs </p>
                        </div>
                    </div>
                    <section class="row justify-content-center">
                        <article class="col-lg-10 m-2 fontText textJust">
                            <p>Vous trouverez un aperçus de nos tarif ci dessous.Pour plus de renseignement sur les démarches administratifs ou la demande de devis nos chargés d'affaires sont à disposition toute la semaine 7/7. </p>
                            <p>Pour toute autre demande vous pouvez nous contacter via notre numero ou le formulaire de contact.</p>
                        </article>
                    </section>
                </div>

                <section class="row justify-content-center  imgRate">
                    <article class="col-lg-10 Textcolor mt-2 mb-4 p-3">
                        <p class="text-center mb-3 fs-5 text-light fontTitle ">De quoi est constitué le prix de la location d'un avion ?</p>
                        <ul>
                            <li class="text-light fontText">Premièrement la location de l'avion coque nue (c'est a dire sans pilote)</li>
                        </ul>
                        <p class="text-light fontText ">L'estimation du prix d'un déplacement en avion pourra varier en fonction des facteurs suivants:</p>
                        <ul>
                            <li class="text-light fontText">Le modèle de l'avion. En effet le tarif ne sera pas le même entre deux avion de taille et puissance différente. </li>
                            <li class="text-light fontText">La distance entre le lieu de depart et celui d'arrivée. Plus la distance est élevée plus la consommation en carburant et l'entretien de l'avion sera nécessaire. </li>
                            <li class="text-light fontText">Les taxes d'aéroport (Différent d'un aeroport à l'autre).</li>
                        </ul>
                    </article>
                </section>

                <section class="row justify-content-evenly fontText">
                    <article class="col-lg-3 mt-3">
                    <p class="h3">Cesna</p>
                        <p class="textJust fw-bold">Le prix pour la location d'un avion d'un petit avion commence à 300 €/HT (coque nue) au quel s'ajoute des couts ci dessus.</p>
                    </article>
                    <article class="col-lg-3 mt-3">
                    <p class="h3">Socata</p>
                        <p class="textJust fw-bold">Le prix de location pour un avion de grande taille commence à 550€/HT (coque nue) au quel s'ajoute des couts ci dessus. </p>
                    </article>
                </section>

                

                <div class="row justify-content-center">
                    <div class="col-lg-11 col-11">
                        <p class="m-3 p-2 fs-3 text-center fontTitle ligneGalerie"> Galerie </p>
                    </div>
                </div>

                <section class="row m-0 p-0 justify-content-center mb-5 mt-3">
                    <article class="col-lg-10 col-9">
                        <div class="row justify-content-center">
                            <div class="col-10 col-lg-4 p-0">
                                <a data-lightbox="example-set" href="../public/img/galery1.jpg">
                                    <img class="galeryImg galery" src="../public/img/galery1.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-10 col-lg-4 p-0">
                                <a data-lightbox="example-set" href="../public/img/galery2.jpg">
                                    <img class="galeryImg galery" src="../public/img/galery2.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-10 col-lg-4 p-0">
                                <a data-lightbox="example-set" href="../public/img/galery3.jpg">
                                    <img class="galeryImg galery" src="../public/img/galery3.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-10 col-lg-4 p-0">
                                <a data-lightbox="example-set" href="../public/img/galery4.jpg">
                                    <img class="galeryImg galery" src="../public/img/galery4.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-10 col-lg-4 p-0">
                                <a data-lightbox="example-set" href="../public/img/galery5.jpg">
                                    <img class="galeryImg galery" src="../public/img/galery5.jpg" alt="">
                                </a>
                            </div>

                            <div class="col-10 col-lg-4 p-0">
                                <a data-lightbox="example-set" href="../public/img/galery6.jpg">
                                    <img class="galeryImg galery" src="../public/img/galery6.jpg" alt="">
                                </a>
                            </div>

                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
    <?php include '../elements/footer.php' ?>
</body>

</html>