<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_role'] != 1) {
  header("Location: login.php");
  exit;
}

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/plane.php';
require_once '../helpers/form.php';

// je vérifie si delete est present dans l'url a l'aide d'un isset $_GET
if (isset($_GET['delete'])) {
  // j'instancie un nouvel objet selon la classe plane
  $attributDel = new Plane();

  // je crée une variable infoPlane qui contient les informations d'un avion selon son ID
 $infoPlane = $attributDel->returnOnePlane($_GET['delete']);

//  je crée une variable odlplanepicture qui contient le nom de l'image
  $oldPlanePicture = $infoPlane['plane_picture'];

  // je supprime l'image du dossier img
  unlink('../public/img/' . $oldPlanePicture);

  // je supprime mon avion de ma base de donnée a l'aide de la méthode deletePlan()
  $attributDel->deletePlane($_GET['delete']);
}

$attribut = new Plane();
$planes = $attribut->returnPlane();
