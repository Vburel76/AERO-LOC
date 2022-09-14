<?php 
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  exit;  
}

var_dump($_POST);
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/plane.php';

$attribut = new Plane();

$plane = $attribut->returnOnePlane($_GET['planeId']);