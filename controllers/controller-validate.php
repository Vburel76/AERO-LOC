<?php
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}


require_once '../config.php';
require_once '../models/database.php';
require_once '../models/location.php';
require_once '../models/plane.php';


$showForm = true;
$errors = [];
$regexName = "/^[ a-zA-Zéèêë]+$/";




if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  if (isset($_POST['dateStart'])) {

    if ($_POST['dateStart'] == '') {
      $errors['dateStart'] = "champ obligatoire";
    }
  }

  if (isset($_POST['periode'])) {

    if ($_POST['periode'] == '') {
      $errors['periode'] = "champ obligatoire";
    }
  }

  if (isset($_POST['departure'])) {

    if ($_POST['departure'] == '') {
      $errors['departure'] = "champ obligatoire";
    } else if (!preg_match($regexName, $_POST['departure'])) {
      $errors['departure'] = "Mauvais format";
    } 
  }

  if (isset($_POST['arrival'])) {

    if ($_POST['arrival'] == '') {
      $errors['arrival'] = "champ obligatoire";
    } else if (!preg_match($regexName, $_POST['arrival'])) {
      $errors['arrival'] = "Mauvais format";
    } 
  }

  if (count($errors) == 0) {

    $_location_start = htmlspecialchars($_POST['dateStart']);
    $_location_periode = htmlspecialchars($_POST['periode']);
    $_location_departure = htmlspecialchars($_POST['departure']);
    $_location_arrival = htmlspecialchars($_POST['arrival']);
    $_user_id = intval($_SESSION['user']['user_id']);
    $_plane_id = intval($_GET['plane']);

    $userObj = new Location();

    if ($userObj->checkIfDateExists($_POST['dateStart'])) {

      $errors['dateStart'] = 'Date indisponible';
    } else {
      $validateObj = new Location();

      $validateObj->addvalidate($_location_start, $_location_periode, $_location_departure, $_location_arrival, $_user_id, $_plane_id);

      $_SESSION['swal'] = [
        'icon' => 'success',
        'title' => 'réservation enregistré',
        'text' => 'En attente de validation'
      ];
      header('Location: pagePlane.php');
      exit;
    }
  }
}
$validateObj = new Location();
$location = $validateObj->returnPlaneValidate($_GET['plane']);

$attribut = new Plane();
$plane = $attribut->returnOnePlane($_GET['plane']);
