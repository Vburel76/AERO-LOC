<?php 
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_role'] != 1) {
  header("Location: login.php");
  exit;
}



require_once '../config.php';
require_once '../models/database.php';
require_once '../models/location.php';


$attribut = new Location();
$location = $attribut->returnValidate();