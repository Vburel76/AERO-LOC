<?php 
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  exit;  
}

var_dump($_POST);
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/validate-location.php';

$attribut = new Validate();

$location = $attribut->returnOnelocation($_GET['locationId']);