<?php 
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/location.php';


$attribut = new Location();
$location = $attribut->returnUserValidate($_SESSION['user']['user_id']);