<?php
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
  }

require_once '../config.php';
require_once '../models/database.php';
require_once '../models/user.php';
require_once '../models/role.php';



$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";

$roleObj = new Role();
$roleArray = $roleObj->getAllRole();

var_dump($_SESSION);



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

    if(isset($_POST['lastpassword']) && !empty($_POST['lastpassword']) ){
        if (password_verify($_POST['lastpassword'], $_SESSION['user']['user_password'])) {
           echo "bon mot de passe";
        }else{
            $errors['lastpassword'] = "mauvais mot de passe";
        }
    }

    if (isset($_POST['password'])) {

        if ($_POST['password'] == '') {
            $errors['password'] = "champ obligatoire";
        } else if ($_POST['confirmPassword'] == '' &&  $_POST['password'] != '') {
            $errors['confirmPassword'] = 'champ obligatoire';
        } else if ($_POST['confirmPassword'] != $_POST['password']) {
            $errors['password'] = "mot de passe différent";
        }
    }



    if (count($errors) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $lasnameUser = htmlspecialchars($_POST['lastname']);
        $firstnameUser = htmlspecialchars($_POST['firstname']);
        $passwordUser = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $phoneNumberUser = htmlspecialchars($_POST['mobile']);
        $usersId = htmlspecialchars($_SESSION['user']['user_id']);

        $usersModif = new Users();

        $usersModif->modifUser($lasnameUser, $firstnameUser,$passwordUser, $phoneNumberUser,2, $usersId);
    }
}
$userObj = new Users();

$infoUser = $userObj->returnOneUser($_SESSION['user']['user_id']);
