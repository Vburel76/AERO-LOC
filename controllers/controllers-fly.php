<?php


require_once '../config.php';
require_once '../models/database.php';
require_once '../models/plane.php';
require_once '../helpers/form.php';



$attribut = new Plane();
$planes = $attribut->returnPlane();