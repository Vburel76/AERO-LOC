<?php
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}

var_dump($_GET);
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/location.php';

// si delete existe 
if (isset($_GET['delete'])) {

  // Je crée un nouvel objet de la classe validate
  $attributDel = new Location();

  // je crée une variable infoLocation qui contient les information d'une location
  $infoLocation = $attributDel->returnOnelocation($_GET['delete']);

  // je supprime la location avec la methode deleteLocation
  $attributDel->deleteLocation($_GET['delete']);
  header("Location: list-location.php");
}


$attribut = new Location();

$location = $attribut->returnOnelocation($_GET['locationId']);

if (isset($_POST['change'])) {
  $validation = $attribut->ChangeValidation(1, $_GET['locationId']);
}
