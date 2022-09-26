<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<?php include '../elements/meta.php' ?>

<?php include '../elements/navBar.php' ?>

<div class="BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-11 bg-light  p-0">
            <div row class="d-none d-lg-block  m-0 p-0 FormationImg">
            </div>


            <section class="row justify-content-center formationBackground m-0 p-0">
                <article class="col-lg-9 col-12  p-3">
                    <p class="text-center fs-4 fontTitle">Quesque le PPL ?</p>
                    <br>
                    <p class=" fontText ">La licence PPL (Private Pilot Licence) est une formation récente accessible dès 45 heures de vol.
                        Cette licence européenne confère à son détenteur les mêmes privilèges que la LAPL sans la limitation du nombre de passagers et sans la limitation de la masse de l’appareil (>2 tonnes).
                        C’est aujourd’hui la licence de pilote à caractère non professionnel la plus répandue.
                        La PPL(A) est une licence européenne qui vous permet d’évoluer vers d’autres qualifications.
                        La formation de pilote privé est dispensée par un instructeur qualifié.</p>

                    <p class="fs-4 fontTitle text-center">Durée de la formation</p>

                    <p class=" fontText">La formation se déroule sur une période de 6 à 18 mois en fonction des disponibilités et du temps que vous y consacrez.Le programme est adapté en fonction de la rapidité d'apprenstissage du client.</p>
                </article>
            </section>

            <p class="text-center mt-4 fs-4 fontTitle">Les formations</p>

            <p class="fs-5 text-center mt-4  fontTitle">Conditions d'admission pour la formation</p>

            <p class="text-center mt-4 fontText">Un certain nombres de conditions doivent etre remplir pour pouvoir commencer la formation.</p>

            <section class="row justify-content-center mt-5 m-0 p-0">
                <article class="col-lg-3 col-8 mt-1 m-2 text-center Textcolor">
                    <p class=" m-2 fontText "><i class="bi bi-globe fs-4 m-2"></i>être francais</p>
                </article>
                <article class="col-lg-3 col-8 mt-1 m-2 text-center Textcolor">
                    <p class=" m-2 fontText"><i class="bi bi-check2-circle fs-4 m-2"></i>avoir l'age minimum requis</p>
                </article>
                <article class="col-lg-3 col-8 mt-1 m-2 text-center Textcolor">
                    <p class=" m-2 fontText"><i class="bi bi-heart-pulse fs-4 m-2"></i>être apte médicalement</p>
                </article>
            </section>


            <div class="row text-center justify-content-center mt-5 m-0 p-0">
                <div class="col-lg-10">
                    <img class="imgFormation" src="../public/img/formationImg.jpg" alt="formationImg">
                </div>
            </div>
            <section class="row justify-content-center m-0 p-0">
                <article class="col-lg-9 mt-5 ">
                    <p class="text-center fs-4 fontTitle">Déroulé de la formation</p>

                    <p class="fontText">La formation commence par une partie théorique de plusieurs heures et qui s'effectue dans une salle de cours avec un formateur assermenté, cette partie theorique fera l'objet d'une évaluation.Par la suite la partie pratique se déroulare tous d'abord en simulateur et ensuite en avion, la aussi vous passerez une évaluation qui determinera l'obtention du PPL ou pas . </p>

                </article>
            </section>

            <p class="text-center mt-5 fs-4 fontTitle">Programme de la formation théorique</p>

            <section class="row m-0 p-0 justify-content-center">
                <article class="col-lg-9 col-11 borderColor">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="tableauSize fontText">Module</th>
                                <th scope="col" class="tableauSize fontText">Sujet</th>
                                <th scope="col" class="tableauSize fontText">Temps</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td scope="col">01</td>
                                <td scope="col">Réglementation</td>
                                <td scope="col">2h30</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Performances humaines</td>
                                <td>1h30</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Communication</td>
                                <td>2h00</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Météorologie</td>
                                <td>2h00</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="tableauSize fontText">Module</th>
                                <th scope="col" class="tableauSize fontText">Sujet ciblé</th>
                                <th scope="col" class="tableauSize fontText">Temps</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>01</td>
                                <td>Connaissances générales de l'aéronef</td>
                                <td>2h30</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Procédures opérationnelles</td>
                                <td>1h30</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Performances et préparation du vol</td>
                                <td>2h00</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Navigation</td>
                                <td>2h00</td>
                            </tr>
                        </tbody>
                    </table>
                </article>
            </section>

            <div class="text-center mt-3 fontText">
                <p>Début des leçons de pilotage pratique a l'issu de l'obention du PPL théorique. avec instructeur.Le planing s'adaptera à vos besoin.</p>
            </div>

            <section class="row m-0 p-0 justify-content-center ">

                <article class="col-lg-3 col-11 text-center Textcolor m-3">
                    <p class="m-2 fontText">7 heures en simulateur de vol.</p>
                </article>

                <article class="col-lg-3 col-11 text-center Textcolor m-3">
                    <p class="m-2 fontText">28 heures en vol avec instructeur.</p>
                </article>

            </section>


            <p class="text-center fs-4  fontTitle">Formulaire</p>

            <form action="" method="post">
                <div class="row m-0 p-0 justify-content-center ">
                    <div class="col-lg-3 col-11   m-2">
                        <div class="input-group flex-nowrap  FormularSize">
                            <span class="input-group-text spanSize fontText" id="addon-wrapping">Nom</span>
                            <input type="text" class="form-control " aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap  FormularSize mt-4">
                            <span class="input-group-text spanSize fontText" id="addon-wrapping">Prénom</span>
                            <input type="text" class="form-control " aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap  FormularSize mt-4">
                            <span class="input-group-text spanSize fontText" id="addon-wrapping">Email</span>
                            <input type="text" class="form-control " aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap  FormularSize mt-4">
                            <span class="input-group-text spanSize fontText" id="addon-wrapping">Mobile</span>
                            <input type="text" class="form-control " aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-floating col-lg-3 col-11 m-2">
                        <textarea class=" form-control" style="width: 100%; height:13.5rem" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea  ">Message</label>
                    </div>

                    <div class=" row d-flex justify-content-center mt-3 mb-3 m-0 p-0">
                        <button type="submit" class="btn col-lg-3 col-10 Textcolor buttonSize">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../elements/footer.php' ?>