<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center">
        Aero-Loc
    </header>
    <?php include '../elements/navBar.php' ?>

    <div class="container border border-dark">
        <div class="row">
            <div class="col-lg-6 border border-danger">
                <div class="border border-dark">
                    <img class="imageFlotte" src="../public/img/Cessna 172.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 border border-danger">
                <div class="row">
                    <p>titre avion</p>

                    <p>Explication sur la marche à suivre</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <label for="start">Date de départ :</label><br>
                        <input class="mt-3 fs-4" type="date" id="start" name="trip-start" min=<?php echo date('Y-m-d'); ?> </div>
                    </div>
                    <div class="col-lg-5">
                        <label for="start">Date de retour :</label><br>
                        <input class="mt-3 fs-4" type="date" id="start" name="trip-start" min=<?php echo date('Y-m-d'); ?> </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-lg-5  ">
                        <p> Lieu départ :</p>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                            <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="de" data-next-input="date">
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <p>Lieu arrivée :</p>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                            <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="vers" data-next-input="date">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 mt-3">
                        <label>Nom :</label><br>
                        <div class="mt-2">
                            <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="Votre Nom" data-next-input="date">
                        </div>
                    </div>
                    <div class="col-lg-5 mt-3">
                        <label>Prénom :</label><br>
                        <div class="mt-2">
                            <input type="text" class="form-control" type="text" autocomplete="off" name="startAirport" placeholder="Votre Prénom" data-next-input="date">
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary mt-5 m-2">Annuler</a>
                    <a class="btn btn-primary mt-5 m-2">Valider</a>
                </div>



            </div>

        </div>

    </div>

    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>