<?php
if (!isset($_SESSION['user'])) {
  session_start();
}

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/plane.php';
require_once '../helpers/form.php';


if (isset($_GET['plane_id'])) {
  echo 'delete patient';
  $attributDel = new Plane();

  // je supprime l'image de mon dossier image
  $infoPlane = $attributDel->returnOnePlane($_GET['plane_id']);
  $oldPlanePicture = $infoPlane['plane_picture'];
  unlink('../public/img/' . $oldPlanePicture);

  // je supprime mon avion de ma base de donnée
  $planeDel = $attributDel->deletePlane($_GET['plane_id']);
}

$attribut = new Plane();
$planes = $attribut->returnPlane();
