<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_role'] != 1) {
    header("Location: login.php");
    exit;
  }

require_once '../helpers/form.php';
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/plane.php';


$showForm = true;
$errors = [];
$regexletter = "/^[a-zA-Zéèêë]+$/";
$regexnum = "/^[0-9]+$/";



$paramUpload = [
    // Taille max de l'image
    'size' => 4000000,
    // les extensions autorisé
    'extension' => ['jpeg', 'jpg', 'webp', 'png'],
    // le nom du répertoire qui va accueillir les images
    'directory' => '../public/img/',
    // choix de l'extension lors de l'enregistrement de l'image
    'extend' => 'webp'
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Si le client ne clique pas sur upload, il sera en error 4, et donc pas de test
    if ($_FILES['fileToUpload']['error'] != 4) {
        // je stock dans une variable intermédiaire le resultat de la méthode verifyImage()
        $resultVerifyImg = Form::verifyImg('fileToUpload', $paramUpload);

        if ($resultVerifyImg['permissionToUpload'] === false) {
            $errors['fileToUpload'] = $resultVerifyImg['errorMessage'];
        }
    }

    if (isset($_POST['namelocPlane'])) {

        if ($_POST['namelocPlane'] == '') {
            $errors['namelocPlane'] = "champ obligatoire";
        }
    }

    if (isset($_POST['sizelocPlane'])) {

        if ($_POST['sizelocPlane'] == '') {
            $errors['sizelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['sizelocPlane'])) {
            $errors['sizelocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['scopelocPlane'])) {

        if ($_POST['scopelocPlane'] == '') {
            $errors['scopelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['scopelocPlane'])) {
            $errors['scopelocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['autonomylocPlane'])) {

        if ($_POST['autonomylocPlane'] == '') {
            $errors['autonomylocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['autonomylocPlane'])) {
            $errors['autonomylocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['altitudelocPlane'])) {

        if ($_POST['altitudelocPlane'] == '') {
            $errors['altitudelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['altitudelocPlane'])) {
            $errors['altitudelocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['speedlocPlane'])) {

        if ($_POST['speedlocPlane'] == '') {
            $errors['speedlocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['speedlocPlane'])) {
            $errors['speedlocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['descriptionlocPlane'])) {

        if ($_POST['descriptionlocPlane'] == '') {
            $errors['descriptionlocPlane'] = "champ obligatoire";
        }
    }

    if (isset($_POST['presentationlocPlane'])) {

        if ($_POST['presentationlocPlane'] == '') {
            $errors['presentationlocPlane'] = "champ obligatoire";
        }
    }

    if (count($errors) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $_plane_name = htmlspecialchars($_POST['namelocPlane']);
        $_plane_size = htmlspecialchars($_POST['sizelocPlane']);
        $_plane_scode = htmlspecialchars($_POST['scopelocPlane']);
        $_plane_autonomy = htmlspecialchars($_POST['autonomylocPlane']);
        $_plane_altitude = htmlspecialchars($_POST['altitudelocPlane']);
        $_speed = htmlspecialchars($_POST['speedlocPlane']);
        $_plane_description = htmlspecialchars($_POST['presentationlocPlane']);
        $_plane_loc_description = htmlspecialchars($_POST['descriptionlocPlane']);
        $_planeId = htmlspecialchars($_GET['planeId']);

        // Si l'error = 4 cela signifie que l'utilisateur n'a pas choisi d'image
        if ($_FILES['fileToUpload']['error'] == 4) {
            $planeObj = new Plane();
            $infoPlane = $planeObj->returnOnePlane($_GET['planeId']);
            $_plane_picture = $infoPlane['plane_picture'];
            $planeObj->modifplane($_plane_name, $_plane_size, $_plane_scode, $_plane_autonomy, $_plane_altitude, $_speed, $_plane_picture, $_plane_description, $_plane_loc_description, $_planeId);

            header('Location: plane-list.php');
        } else {
            $resultUploadImage = form::uploadImage('fileToUpload', $paramUpload);

            if ($resultUploadImage['success'] === false) {
                $errors['fileToUpload'] = $resultUploadImage['errorMessage'];
            } else {
                $planeObj = new Plane();

                $infoPlane = $planeObj->returnOnePlane($_GET['planeId']);
                $oldPlanePicture = $infoPlane['plane_picture'];
                unlink('../public/img/' . $oldPlanePicture);

                $_plane_picture = $resultUploadImage['imageName'];
                $planeObj->modifplane($_plane_name, $_plane_size, $_plane_scode, $_plane_autonomy, $_plane_altitude, $_speed, $_plane_picture, $_plane_description, $_plane_loc_description, $_planeId);

                header('Location: plane-list.php');
            }
        }
    }
}

$userObj = new Plane();
$infoPlane = $userObj->returnOnePlane($_GET['planeId']);

