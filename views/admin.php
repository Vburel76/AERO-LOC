<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-admin.php';
?>

<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0 justify-content-center test">
        <div class="col-lg-8 bg-light p-0">
            <div class="row m-3 p-0 justify-content-center ">
                <div class="col-lg-11 col-12 text-center">
                    <p class="fontTitle text-center m-3 p-2 fs-3 lignecontenu "> Gestion du contenu </p>
                </div>
            </div>

            <div class="row justify-content-center  m-0 p-0">
                <div class="col-lg-8 col-8 m-5 text-center py-5">
                    <a type="button" href="addLoc.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Ajouter une location </a>
                    <a type="button" href="list-location.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Gestion des locations</a>
                    <a type="button" href="adduser.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Ajouter utilisateur</a>
                    <a type="button" href="user-list.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Gestion des utilisateurs</a>
                    <a type="button" href="add-plane.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Ajouter avion</a>
                    <a type="button" href="plane-list.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Gestion des avions</a>
                    <div class="row m-0 p-0 justify-content-center ">
                        <div class="col-lg-2 col-12 m-2 mt-4">
                            <a href="landing.php" type="submit" class="btn fontColor btnSize  p-1">Retour</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <?php include '../elements/footer.php' ?>
</body>