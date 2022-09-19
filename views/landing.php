<?php include '../elements/meta.php';


if (!isset($_SESSION['user'])) {
    session_start();
}
?>

<body>

    <header class="text-center m-0 d-lg-block d-none">
        <!-- <h1>Aero-Loc</h1> -->
    </header>

    <?php include '../elements/navBar.php' ?>

    <main>


        <section class="row justify-content-center  section1 mt-5 m-0 p-0">

            <article class="col-12 col-lg-5  text-center ">
                <img class="imageArticle1" src="../public/img/aeroclub.jpg" alt="aeroclub">
            </article>
            <article class="col-lg-5 m-3 p-0 ">
                <p class="fs-5 textJust mt-3 fontText ">AeroLoc n'est pas une compagnie aérienne, mais une société de location d'aéronefs (coque nue) sans pilote pour réaliser vos vols privés et vols d'affaires à prix abordables.<br>
                    La société est fondée en 2015 et implantée près de la ville du Havre.
                    Nous offrons également la possibilité de passer le LAPL et le PPL licences de pilotage obligatoire pour pouvoir piloter un de nos avions .<br>
                    Retrouver sur notre site toutes les informations sur la location et le passage des licences de pilotage.
                </p>
                <p class="fs-5 fontText">un vol urgent ou un vol vers une destination peu desservie, notre équipe affrète vous accompagne tout au long de la préparation de votre vol.
                </p>

                </p>
            </article>
        </section>

        <div class="row  mt-4 m-0 p-0 justify-content-center  text-center ">
            <p class="fs-2 fontTitle">Informations</p>
        </div>

        <div class="row  m-0 p-0 section1 justify-content-center">

            <section class="row mt-3 justify-content-center m-3">
                <article class="col-lg-5 col-12 info  p-0 m-1">
                    <p class="fs-4 Textcolor text-center fontTitle">Location</p>
                    <p class="mt-4 fontText px-3">Aero-Loc propose une large gamme de service et notament la location d’avion.
                        En effet apres avoir remplir certaines conditions qui vous serons communiquées , il sera possible de louer un avion pour les itinéraires de votre choix.
                    </p>
                </article>
                <article class="col-lg-5 col-12 info  p-0 m-1 ">
                    <p class="fs-4 Textcolor text-center fontTitle">Certification</p>
                    <p class="fontText px-3">Aero-Loc propose également le passsage des certifications necessaires pour pouvoir piloter.
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-10 text-center ">
                            <img class="image3" src="../public/img/PPL.jpg" alt="">
                        </div>
                    </div>
                </article>
            </section>


            <div class="text-center mt-5">
                <img width="60%" src="../public/img/headerimgInformation.jpg" alt="imgInformation">
            </div>
            <div class="row  justify-content-center mt-2">

                <div class="row justify-content-center ">
                    <div class="col-lg-10">
                        <p class="fs-2 text-center mt-2 fontTitle">A propos des tarifs </p>
                    </div>

                </div>


                <section class="row justify-content-center">
                    <article class="col-lg-10 m-2 fontText">
                        <p>Vous trouverez un aperçus de nos tarif ci dessous.Pour plus de renseignement sur les démarches administratifs ou la demande de devis nos chargés d'affaires sont à disposition toute la semaine 7/7. </p>
                        <p>Pour toute autre demande vous pouvez nous contacter via notre numero ou le formulaire de contact.</p>
                    </article>
                </section>
            </div>

            <section class="row justify-content-center  imgRate">
                <article class="col-lg-10 Textcolor p-3">
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

            <section class="row justify-content-center fontText">
                <article class="col-lg-5 mt-3">
                    <p class="text-center ">Le prix pour la location d'un avion d'un petit avion commence à 300 €/HT (coque nue) au quel s'ajoute des couts ci dessus.</p>
                </article>
                <article class="col-lg-5 mt-3">
                    <p class="text-center">Le prix de location pour un avion de grande taille commence à 550€/HT (coque nue) au quel s'ajoute des couts ci dessus. </p>
                </article>
            </section>


            <p class="m-3 p-2 fs-2 text-center fontTitle">Galerie Photo</p>


            <section class="row m-0 p-0 justify-content-center mb-3 mt-3">
                <article class="col-lg-10 col-9 ">
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
    </main>


    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>