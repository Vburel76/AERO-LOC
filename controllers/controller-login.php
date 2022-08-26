<?php
require_once '../config.php';
require_once '../models/database.php';
require_once '../models/users.php';

$showForm = true;
$error = [];
$regexName = "/^[a-zA-Zéèêë]+$/";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['login'])) {

        if ($_POST['login'] == '') {
            $error['login'] = "champ obligatoire";
        }
    }


    if (isset($_POST['password'])) {

        if ($_POST['password'] == '') {
            $error['password'] = "champ obligatoire";
        }
    }

    if (count($error) == 0) {

        $userObj = new Users();

        if ($userObj->checkIfMailExists($_POST['login'])) {

            $usersInfo = $userObj->checkPassword($_POST['login']);

            if (password_verify($_POST['password'], $usersInfo['user_password'])) {
                $_SESSION['user'] = $usersInfo;
                header("Location: landing.php");
            } else {
                $error['connection'] = 'Identifiant ou mot de passe  incorecte';
            }
        } else {
            $error['connection'] = 'Identifiant ou mot de passe  incorecte';
        }
    }
}
