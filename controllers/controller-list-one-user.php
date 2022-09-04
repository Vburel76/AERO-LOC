<?php 
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  exit;  
}


require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';

$attribut = new Users();

$users = $attribut->returnOneUser($_GET['userId']);



