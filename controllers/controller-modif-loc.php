<?php
if (!isset($_SESSION['user'])) {
    header("Location: connection.php");
    exit;
}

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/validate-location.php';
require_once '../models/users.php';



$showForm = true;
$error = [];
$regexName = "/^[a-zA-Zéèêë]+$/";

var_dump($_GET);

// je declenche mes vérifications lorsque j'appui sur le bouton validé car ça declenche un POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['modifDateLoc'])) {

        if ($_POST['modifDateLoc'] == '') {
            $errors['modifDateLoc'] = "champ obligatoire";
        }
    }

    if (isset($_POST['endModifLoc'])) {

        if ($_POST['endModifLoc'] == '') {
            $errors['endModifLoc'] = "champ obligatoire";
        }
    }

    if (isset($_POST['departureModifLoc'])) {

        if ($_POST['departureModifLoc'] == '') {
            $errors['departureModifLoc'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['departureModifLoc'])) {
            $errors['departureModifLoc'] = "Mauvais format";
        }
    }

    if (isset($_POST['arrivalModifLoc'])) {

        if ($_POST['arrivalModifLoc'] == '') {
            $errors['arrivalModifLoc'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['arrivalModifLoc'])) {
            $errors['arrivalModifLoc'] = "Mauvais format";
        }
    }


    if (count($errors) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $locationStart = htmlspecialchars($_POST['modifDateLoc']);
        $locationEnd = htmlspecialchars($_POST['endModifLoc']);
        $locationDeparture = htmlspecialchars($_POST['departureModifLoc']);
        $locationArrival = htmlspecialchars($_POST['arrivalModifLoc']);
        $locationId = intval($_GET['locationId']);
        

        $locationModif = new Validate();

        $locationModif->modifLocValidate( $locationStart,  $locationEnd, $locationDeparture,  $locationArrival, $locationId);
    }
}
$locObj = new Validate();

$infoLocation = $locObj->returnOnelocation($_GET['locationId']);