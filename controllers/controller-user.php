<?php


require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';



$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['nameUser'])) {

        if ($_POST['nameUser'] == '') {
            $errors['nameUser'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['nameUser'])) {
            $errors['nameUser'] = "Mauvais format";
        }
    }


    if (isset($_POST['firstnameUser'])) {

        if ($_POST['firstnameUser'] == '') {
            $errors['firstnameUser'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['firstnameUser'])) {
            $errors['firstnameUser'] = "Mauvais format";
        }
    }

    if (isset($_POST['phoneUser'])) {

        if ($_POST['phoneUser'] == '') {
            $errors['phoneUser'] = "champ obligatoire";
        } else if (!preg_match($regexPhone, $_POST['phoneUser'])) {
            $errors['phoneUser'] = "Mauvais format";
        }
    }


    if (isset($_POST['mailUser'])) {

        if ($_POST['mailUser'] == '') {
            $errors['mailUser'] = "champ obligatoire";
        } else if (!filter_var($_POST['mailUser'], FILTER_VALIDATE_EMAIL)) {
            $errors['mailUser'] = "Mauvais format";
        }
    }

    if (isset($_POST['passwordUser'])) {

        if ($_POST['passwordUser'] == '') {
            $errors['passwordUser'] = "champ obligatoire";
        } else if ($_POST['passwordUser'] == '' &&  $_POST['comfirmePasswordUser'] != '') {
            $errors['confirmPassword'] = 'champ obligatoire';
        } else if ($_POST['comfirmePasswordUser'] != $_POST['passwordUser']) {
            $errors['comfirmePasswordUser'] = "mot de passe différent";
        }
    }

}