<?php 


require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';


$attribut = new Users();
$user = $attribut->returnOneUser($_SESSION['user']['user_id']);