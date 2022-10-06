<?php
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}


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
  header("Location: reservation.php");
}


$attribut = new Location();

if (isset($_POST['change'])) {
$attribut->ChangeValidation(1, $_GET['locationId']);
}
$location = $attribut->returnOnelocation($_GET['locationId']);