<?php
if (!isset($_SESSION['user']) || $_SESSION['user']['role_id_role'] != 1) {
    header("Location: login.php");
    exit;
  }

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/user.php';
require_once '../models/role.php';



$showForm = true;
$error = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";

$roleObj = new Role();
$roleArray = $roleObj->getAllRole();





// je declenche mes vérifications lorsque j'appui sur le bouton validé car ça declenche un POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['lastname'])) {

        if ($_POST['lastname'] == '') {
            $error['lastname'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['lastname'])) {
            $error['lastname'] = "Mauvais format";
        }
    }


    if (isset($_POST['firstname'])) {

        if ($_POST['firstname'] == '') {
            $error['firstname'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $error['firstname'] = "Mauvais format";
        }
    }

    if (isset($_POST['mobile'])) {

        if ($_POST['mobile'] == '') {
            $error['mobile'] = "champ obligatoire";
        } else if (!preg_match($regexPhone, $_POST['mobile'])) {
            $error['mobile'] = "Mauvais format";
        }
    }


    if (count($error) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $lasnameUser = htmlspecialchars($_POST['lastnameUser']);
        $firstnameUser = htmlspecialchars($_POST['firstname']);
        $phoneNumberUser = htmlspecialchars($_POST['mobile']);
        $roleUser = htmlspecialchars($_POST['selectUser']);
        $usersId = htmlspecialchars($_GET['users']);

        $usersModif = new Users();

        $usersModif->modifUser($lasnameUser, $firstnameUser,$userPictureProfil, $phoneNumberUser,$roleUser,$usersId);
    }
}
$userObj = new Users();

$infoUser = $userObj->returnOneUser($_GET['users']);


