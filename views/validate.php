<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '../controllers/controller-validate.php';
?>

<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center">
        Aero-Loc
    </header>
    <?php include '../elements/navBar.php' ?>

    <div class="container cardColor mt-5 mb-5">
        <div class="row m-3">
            <div class="col-lg-6 col-12">
                <div class=" text-center mt-4 d-flex justify-content-center  ">
                    <img class="imageFlotteVal" src="../public/img/<?= $plane['plane_picture'] ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <p class="textColor2 fontTitle"><?= $plane['plane_name'] ?></p>

                    <p class="fontText">En fonction de votre expérience, vous pourrez être lâché sur nos machines après un éventuel ré-entrainement et un test réalisé par un de nos instructeurs.</p>
                </div>

                <form action="#" method="POST" novalidate>
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-5">
                            <label for="dateStart" class="fontText textColor2" for="start">Date de départ :</label><br>
                            <span class="text-danger"><?= isset($errors['dateStart']) ? $errors['dateStart'] : '' ?></span>
                            <input id="dateStart" name="dateStart" class="mt-3 fs-4" type="date" id="start" name="trip-start" min=<?php echo date('Y-m-d') ?>>
                        </div>
                        <div class="col-lg-5">
                            <label for="dateEnd" class="fontText textColor2" for="start">Date de retour :</label><br>
                            <span class="text-danger"><?= isset($errors['dateEnd']) ? $errors['dateEnd'] : '' ?></span>
                            <input id="dateEnd" name="dateEnd" class="mt-3 fs-4" type="date" id="start" name="trip-start" min=<?php echo date('Y-m-d') ?>>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-lg-5">
                            <p class="fontText mb-1 mt-3"> Lieu départ :</p>
                            <span class="text-danger"><?= isset($errors['departure']) ? $errors['departure'] : '' ?></span>
                            <div class="input-group">
                                <span for="departure" class="input-group-text Textcolor"><i class="bi bi-geo-alt-fill"></i></span>
                                <input id="departure" name="departure" type="text" class="form-control" type="text" autocomplete="off" placeholder="de">
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <p class="fontText mb-1 mt-3">Lieu arrivée :</p>
                            <span class="text-danger"><?= isset($errors['arrival']) ? $errors['arrival'] : '' ?></span>
                            <div class="input-group">
                                <span for="arrival" class="input-group-text Textcolor"><i class="bi bi-geo-alt-fill"></i></span>
                                <input id="arrival" name="arrival" type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="vers" data-next-input="date">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <a class="btn Textcolor mt-5 m-2">Annuler</a>
                        <input type="submit" class="btn  Textcolor mt-5 m-2" value="valider">
                    </div>
                </form>





            </div>

        </div>

    </div>

    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>