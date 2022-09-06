<?php
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';

$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['login'])) {

        if ($_POST['login'] == '') {
            $errors['login'] = "champ obligatoire";
        }
    }


    if (isset($_POST['password'])) {

        if ($_POST['password'] == '') {
            $errors['password'] = "champ obligatoire";
        }
    }


    if (count($errors) == 0) {

        $userObj = new Users();

        if ($userObj->checkIfMailExists($_POST['login'])) {

            $usersInfo = $userObj->checkPassword($_POST['login']);

            if (password_verify($_POST['password'], $usersInfo['user_password'])) {
                $_SESSION['user'] = $usersInfo;                
                unset($_SESSION['user']['user_password']);
                //var_dump( $_SESSION);
                header("Location: landing.php");
            } else {
                $errors['connection'] = 'Identifiant ou mot de passe  incorecte';
            }
        } else {
            $errors['connection'] = 'Identifiant ou mot de passe  incorecte';
        }

        $userObj = new Users();

        
    }
}
