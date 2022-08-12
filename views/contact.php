<?php include '../elements/meta.php' ?>

<body>
    <?php include '../elements/navBar.php' ?>

    <div class="row m-3 p-0 justify-content-center">
        <div class="col-lg-8 col-10">
            <p class="mb-3 fs-4 fontTitle textColor2 text-center">Formulaire de contact</p>
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="textColor2 fontText" for="firstName">Prénom</label>
                        <input type="text" class="form-control cardColor" id="firstname" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="textColor2 fontText" for="lastName">Nom</label>
                        <input type="text" class="form-control cardColor" id="lastname" placeholder="" value="" required>
                    </div>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label class="textColor2 fontText" for="email">Email</label>
                    <input type="email" class="form-control cardColor" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label class="textColor2 fontText" for="object">Objet</label>
                    <input type="text" class="form-control cardColor" id="object" placeholder="" value="" required>
                </div>

                <div class="form-group">
                    <label class="textColor2 fontText" for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control cardColor" id="exampleFormControlTextarea1" rows="12"></textarea>
                </div>

                <div class="row justify-content-center m-3">
                        <button class="btn btn-primary col-lg-3 Textcolor">Envoyer</button>
                </div>

            </form>
        </div>
    </div>
    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>