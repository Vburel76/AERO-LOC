<?php
require_once '../data/table.php';
?>

<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center">
        Aero-Loc
    </header>
    <?php include '../elements/navBar.php' ?>
    <?php if (array_key_exists($_GET['id'], $tableFly)) { ?>
        <div class="container cardColor mt-5 mb-5">
            <div class="row m-3">
                <div class="col-lg-6 col-12">
                    <div class=" text-center mt-4 d-flex justify-content-center  ">
                            <img class="imageFlotteVal" src="../public/img/<?= $tableFly[$_GET['id']]['planeImgVal'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <p class="textColor2 fontTitle"><?= $tableFly[$_GET['id']]['title'] ?></p>

                        <p class="fontText">En fonction de votre expérience, vous pourrez être lâché sur nos machines après un éventuel ré-entrainement et un test réalisé par un de nos instructeurs.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <label class="fontText textColor2" for="start">Date de départ :</label><br>
                            <input class="mt-3 fs-4" type="date" id="start" name="trip-start" min=<?php echo date('Y-m-d'); ?> </div>
                        </div>
                        <div class="col-lg-5">
                            <label class="fontText textColor2" for="start">Date de retour :</label><br>
                            <input class="mt-3 fs-4" type="date" id="start" name="trip-start" min=<?php echo date('Y-m-d'); ?> </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-lg-5">
                            <p class="fontText textColor2 "> Lieu départ :</p>
                            <div class="input-group">
                                <span class="input-group-text Textcolor"><i class="bi bi-geo-alt-fill"></i></span>
                                <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="de" data-next-input="date">
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <p class="fontText textColor2">Lieu arrivée :</p>
                            <div class="input-group">
                                <span class="input-group-text Textcolor"><i class="bi bi-geo-alt-fill"></i></span>
                                <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="vers" data-next-input="date">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 mt-3">
                            <label class="fontText textColor2">Nom :</label><br>
                            <div class="mt-2">
                                <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="Votre Nom" data-next-input="date">
                            </div>
                        </div>
                        <div class="col-lg-5 mt-3">
                            <label class="fontText textColor2">Prénom :</label><br>
                            <div class="mt-2">
                                <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="Votre Prénom" data-next-input="date">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a class="btn Textcolor mt-5 m-2">Annuler</a>
                        <a class="btn Textcolor mt-5 m-2">Valider</a>
                    </div>



                </div>

            </div>
        <?php } ?>

        </div>

        <?php include '../elements/footer.php' ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>