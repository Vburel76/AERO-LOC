<?php

require_once '../helpers/form.php';
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/user.php';



$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";
$paramUpload = [
    // Taille max de l'image
    'size' => 4000000,
    // les extensions autorisé
    'extension' => ['jpeg', 'jpg', 'webp', 'png'],
    // le nom du répertoire qui va accueillir les images
    'directory' => '../public/img/',
    // choix de l'extension lors de l'enregistrement de l'image
    'extend' => 'webp'
];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $resultVerifyImg = Form::verifyImg('pictureProfil', $paramUpload);

    if (isset($_POST['firstname'])) {

        if ($_POST['firstname'] == '') {
            $errors['firstname'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = "Mauvais format";
        }
    }


    if (isset($_POST['lastname'])) {

        if ($_POST['lastname'] == '') {
            $errors['lastname'] = "champ obligatoire";
        }
    }

    if (isset($_POST['mobile'])) {

        if ($_POST['mobile'] == '') {
            $errors['mobile'] = "champ obligatoire";
        } else if (!preg_match($regexPhone, $_POST['mobile'])) {
            $errors['mobile'] = "Mauvais format";
        }
    }


    if (isset($_POST['mail'])) {

        if ($_POST['mail'] == '') {
            $errors['mail'] = "champ obligatoire";
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = "Mauvais format";
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

        $resultUploadImage = Form::uploadImage('pictureProfil', $paramUpload);

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $_user_lastname = htmlspecialchars($_POST['lastname']);
        $_user_firstname = htmlspecialchars($_POST['firstname']);
        $_user_mail = htmlspecialchars($_POST['mail']);
        $user_picture_profil = $resultUploadImage['imageName'];
        $_user_phone = htmlspecialchars($_POST['mobile']);
        $_user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $userObj = new Users();

        if ($userObj->checkIfMailExists($_POST['mail'])) {

            $errors['mail'] = 'existe deja';
        } else {



            $userObj->addUser($_user_lastname, $_user_firstname, $_user_mail,$user_picture_profil, $_user_phone, $_user_password);
           
            $_SESSION['swal'] = [
                'icon' => 'success',
                'title' => 'Création',
                'text' => 'Votre compte est bien crée'
            ];

            header('Location: login.php');
            exit;
        }
    }
}