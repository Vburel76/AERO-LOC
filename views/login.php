<?php include '../elements/meta.php' ?>

<?php 
session_start();

require_once '../controllers/controller-login.php';
?>




<body>
    <header class="text-center">
        Aero-Loc
    </header>

    <form action="#" method="POST">
        <div class="row justify-content-center m-4 p-0 ">
            <div class="col-lg-3  p-5 rounded roundColor  ">
                <label for="login">Identifiant</label>
                <span class="ms-2 text-danger">
                    <?= isset($errors['login']) ? $errors['login'] : '' ?>
                </span>
                <input id="login" name="login" class="tailleInput " type="text" value="<?= isset($_POST['login']) ? $_POST['login'] : '' ?>">

                <label class="mt-4">Mot de passe</label><span class="ms-2 text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
                <input name="password" class="tailleInput" type="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">

                <div class="row justify-content-center m-0 p-0">
                    <div class="col-lg-11  mt-1 ">
                        <p class="text-danger text-center fontStyle"><?= isset($error['connection']) ? $errors['connection'] : '' ?></p>
                        <input type="submit" class="btn fontColor btnSize" value="Connection">
                    </div>
                </div>
            </div>

            <a class="text-center m-3" href="#">Mot de passe oublié</a>


        </div>
    </form>

</body>


<?php include '../elements/footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>