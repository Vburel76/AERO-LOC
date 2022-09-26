<?php
session_start();

require_once '../controllers/controller-login.php';
?>

<?php include '../elements/meta.php' ?>

<header class="text-center">
    Aero-Loc
</header>


<p class="text-center fs-5 fontTitle">Connexion</p>
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
                    <p class="text-danger text-center fontStyle"><?= isset($errors['connection']) ? $errors['connection'] : '' ?></p>
                    <input type="submit" class="btn fontColor btnSize" value="Connection">
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-3 text-center">
                <a class="text-center m-3" href="#">Mot de passe oublié</a>
                <a href="formulaire-user.php" type="submit" class="btn fontColor btnSize m-1 p-1">Créer un compte</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center">
                <a href="landing.php" type="submit" class="btn m-1 p-1 presentationColor fontText">Retour à l'accueil</a>
            </div>
        </div>
    </div>
</form>

<?php if (isset($_SESSION['swal'])) { ?>
    <script>
        Swal.fire({
            icon: '<?= $_SESSION['swal']['icon'] ?>',
            title: '<?= $_SESSION['swal']['title'] ?>',
            text: '<?= $_SESSION['swal']['text'] ?>'
        })
    </script>
<?php
    unset($_SESSION['swal']);
} ?>

<?php include '../elements/footer.php' ?>