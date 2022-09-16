<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_role'] != 1) {
  header("Location: login.php");
  exit;
}

var_dump($_POST);
var_dump($_SESSION);
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/location.php';
require_once '../models/plane.php';


$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";




if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  if (isset($_POST['dateStart'])) {

    if ($_POST['dateStart'] == '') {
      $errors['dateStart'] = "champ obligatoire";
    }
  }

  if (isset($_POST['dateEnd'])) {

    if ($_POST['dateEnd'] == '') {
      $errors['dateEnd'] = "champ obligatoire";
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
    $_location_end = htmlspecialchars($_POST['dateEnd']);
    $_location_departure = htmlspecialchars($_POST['departure']);
    $_location_arrival = htmlspecialchars($_POST['arrival']);
    $_user_id = intval($_SESSION['user']['user_id']);
    $_plane_id = intval($_GET['plane']);

    $validateObj = new Location();

    $validateObj->addvalidate($_location_start, $_location_end, $_location_departure, $_location_arrival, $_user_id, $_plane_id);

    header('Location: admin.php');
  }
}




$attribut = new Plane();
$plane = $attribut->returnOnePlane($_GET['plane']);
