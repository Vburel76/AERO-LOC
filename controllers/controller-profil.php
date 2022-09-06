<?php
if (!isset($_SESSION['user'])) {
    header("Location: connection.php");
    exit;
}

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';
require_once '../models/role.php';



$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";

$roleObj = new Role();
$roleArray = $roleObj->getAllRole();





// je declenche mes vérifications lorsque j'appui sur le bouton validé car ça declenche un POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['lastname'])) {

        if ($_POST['lastname'] == '') {
            $errors['lastname'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = "Mauvais format";
        }
    }


    if (isset($_POST['firstname'])) {

        if ($_POST['firstname'] == '') {
            $errors['firstname'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = "Mauvais format";
        }
    }

    if (isset($_POST['mobile'])) {

        if ($_POST['mobile'] == '') {
            $errors['mobile'] = "champ obligatoire";
        } else if (!preg_match($regexPhone, $_POST['mobile'])) {
            $errors['mobile'] = "Mauvais format";
        }
    }








    if (count($errors) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $lasnameUser = htmlspecialchars($_POST['lastnameUser']);
        $firstnameUser = htmlspecialchars($_POST['firstname']);
        $phoneNumberUser = htmlspecialchars($_POST['mobile']);
        $roleUser = htmlspecialchars($_POST['selectUser']);
        $usersId = htmlspecialchars($_GET['users']);

        $usersModif = new Users();

        $usersModif->modifUser($lasnameUser, $firstnameUser, $phoneNumberUser, $roleUser, $usersId);
    }
}
$userObj = new Users();

$infoUser = $userObj->returnOneUser($_SESSION['user']['user_id']);
