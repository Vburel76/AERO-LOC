<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once('../controllers/controller-compte.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/user.php');
?>
<?php
include '../elements/meta.php';
?>

<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center ">
        <div class="col-lg-9 col-11 bg-light m-5 p-0">

            <div class="row justify-content-center mt-1">
                <div class="col-lg-11 col-11 text-center m-3 p-2 fs-3 ">
                    <p class=" text-center fontTitle mt-2 lignecompte m-3 p-2 fs-3 "> Mon profil </p>
                </div>
            </div>


            <div class="row justify-content-center m-2 p-0">
                <div class="col-lg-8 col-12 m-5 roundColor">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-10 text-center m-4">
                            <img class="imgCompte " src="../public/img/<?= $user['user_picture_profil'] ?>" alt="" srcset="">
                        </div>
                        <div class="col-lg-5 col-10 m-4">
                            <p class="m-3 mb-2 "><span class="fw-bold">Nom :</span> <?= strtoupper($user['user_lastname']); ?></p>
                            <p class="m-3"><span class="fw-bold">Prénom :</span> <?= ucfirst($user['user_firstname']); ?></p>
                            <p class="m-3"><span class="fw-bold">mail :</span> <?= $user['user_mail']; ?></p>
                            <p class="m-3"><span class="fw-bold">Mobile :</span> <?= $user['user_phone']; ?></p>
                        </div>

                        <div class="row justify-content-center m-0 p-0">
                            <div class="col-lg-3 col-10 col-10 m-3 text-center">
                                <a class=" btn p-2 TextcolorPagePlane fontText" href="profil.php">Modifier le profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0 justify-content-center ">
                    <div class="col-lg-2 col-10 mt-3  m-2">
                        <a href="landing.php" type="submit" class="btn fontColorbtnValidate btnSize p-1">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>