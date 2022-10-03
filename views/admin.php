<?php include '../elements/meta.php' ?>

<?php
if (!isset($_SESSION['user'])) {
    session_start();
}
require_once '../controllers/controller-admin.php';
?>

<?php include '../elements/navBar.php' ?>

<body class="d-flex flex-column min-vh-100 BGlanding">
    <div class="row m-0 p-0">
        <div class="col-lg-2 m-2">
            <a href="landing.php" type="submit" class="btn fontColor btnSize p-1">Retour</a>
        </div>
    </div>
    <h1 class="text-center">Gestion du contenu</h1>

    <div class="row justify-content-center m-0 p-0 ">
        <div class="col-lg-6 col-8 m-5 text-center bg-light py-5">
            <a type="button" href="addLoc.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Ajouter une location </a>
            <a type="button" href="list-location.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Gestion les locations</a>
            <a type="button" href="adduser.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Ajouter utilisateur</a>
            <a type="button" href="user-list.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">gestion des utilisateurs</a>
            <a type="button" href="add-plane.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Ajouter avion</a>
            <a type="button" href="plane-list.php" class="btn  p-4 btnTaille m-2 fontTheme  rounded-pill ">Gestion des avions</a>


        </div>
    </div>



</body>
<?php include '../elements/footer.php' ?>