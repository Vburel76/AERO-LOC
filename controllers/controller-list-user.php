<?php 
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  exit;  
}

var_dump($_GET);

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';

if(isset($_GET['user_id'])) {
  echo 'delete patient';
  $attributDel = new Users();
  $userDel = $attributDel->deleteUser($_GET['user_id']);
}

$attribut = new Users();
$users = $attribut->returnUsers();