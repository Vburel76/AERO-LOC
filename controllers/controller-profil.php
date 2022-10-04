<?php
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require_once '../config.php';
require_once '../helpers/form.php';
require_once '../models/database.php';
require_once '../models/user.php';
require_once '../models/role.php';

$paramUpload = [
    // Taille max de l'image
    'size' => 40000000,
    // les extensions autorisé
    'extension' => ['jpeg', 'jpg', 'webp', 'png'],
    // le nom du répertoire qui va accueillir les images
    'directory' => '../public/img/',
    // choix de l'extension lors de l'enregistrement de l'image
    'extend' => 'webp'
];



$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";

$roleObj = new Role();
$roleArray = $roleObj->getAllRole();


// je declenche mes vérifications lorsque j'appui sur le bouton validé car ça declenche un POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Si le client ne clique pas sur upload, il sera en error 4, et donc pas de test
    if ($_FILES['pictureProfil']['error'] != 4) {
        // je stock dans une variable intermédiaire le resultat de la méthode verifyImage()
        $resultVerifyImg = Form::verifyImg('pictureProfil', $paramUpload);

        if ($resultVerifyImg['permissionToUpload'] === false) {
            $errors['pictureProfil'] = $resultVerifyImg['errorMessage'];
        }
    }


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

    if (isset($_POST['lastpassword']) && !empty($_POST['lastpassword'])) {
        if (password_verify($_POST['lastpassword'], $_SESSION['user']['user_password'])) {
            echo "bon mot de passe";
        } else {
            $errors['lastpassword'] = "mauvais mot de passe";
        }
    }

    if (isset($_POST['password'])) {


        if ($_POST['confirmPassword'] == '' &&  $_POST['password'] != '') {
            $errors['confirmPassword'] = 'champ obligatoire';
        } else if ($_POST['confirmPassword'] != $_POST['password']) {
            $errors['password'] = "mot de passe différent";
        }
    }



    if (count($errors) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $lastnameUser = htmlspecialchars($_POST['lastname']);
        $firstnameUser = htmlspecialchars($_POST['firstname']);
        $passwordUser = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $phoneNumberUser = htmlspecialchars($_POST['mobile']);
        $usersId = htmlspecialchars($_SESSION['user']['user_id']);

        if ($_FILES['pictureProfil']['error'] == 4) {
            $userObj = new Users();
            $infoUser = $userObj->returnOneUser($_SESSION['user']['user_id']);
            var_dump($infoUser);
            $userPictureProfil = $infoUser['user_picture_profil'];
            $userObj->modifUser($lastnameUser, $firstnameUser, $userPictureProfil, $phoneNumberUser, $passwordUser, 2, $usersId);

            // header('Location: compte.php');
        } else {
            $resultUploadImage = form::uploadImage('pictureProfil', $paramUpload);
            var_dump($resultUploadImage);
            if ($resultUploadImage['success'] === false) {
                $errors['pictureProfil'] = $resultUploadImage['errorMessage'];
            } else {
                $usersModif = new Users();
                $infoUser = $usersModif->returnOneUser($_SESSION['user']['user_id']);
                $oldUserPicture = $infoUser['user_picture_profil'];
                var_dump($oldUserPicture);
                unlink('../public/img/' . $oldUserPicture);

                $userPictureProfil = $resultUploadImage['imageName'];
                $usersModif->modifUser($lastnameUser, $firstnameUser, $userPictureProfil, $phoneNumberUser, $passwordUser, 2, $usersId);

                // header('Location: compte.php');
            }
        }
    }
}
$userObj = new Users();
$infoUser = $userObj->returnOneUser($_SESSION['user']['user_id']);

