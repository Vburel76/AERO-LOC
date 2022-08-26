<?php 


require_once '../config.php';
require_once '../models/database.php';



$showForm = true;
$errors = [];
$regexName = "/^[a-zA-Zéèêë]+$/";
$regexPhone = "/^[0-9]{10}+$/";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['firstname'])) {

        if ($_POST['firstname'] == '') {
            $error['firstname'] = "champ obligatoire";
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $error['firstname'] = "Mauvais format";
        }
    }


    if (isset($_POST['lastname'])) {

        if ($_POST['lastname'] == '') {
            $error['lastname'] = "champ obligatoire";
        }
    }

    if (isset($_POST['mobile'])) {

        if ($_POST['mobile'] == '') {
            $error['mobile'] = "champ obligatoire";
        } else if (!preg_match($regexPhone, $_POST['mobile'])) {
            $error['mobile'] = "Mauvais format";
        }
    }


    if (isset($_POST['mail'])) {

        if ($_POST['mail'] == '') {
            $error['mail'] = "champ obligatoire";
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $error['mail'] = "Mauvais format";
        }
    }

    if (isset($_POST['password'])) {

        if ($_POST['password'] == '') {
            $error['password'] = "champ obligatoire";
        }
    }

    if (count($errors) == 0) {

        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars afin de m'assurer que les données soient safe
        $_user_lastname = htmlspecialchars($_POST['lastname']);
        $_user_firstname = htmlspecialchars($_POST['firstname']);
        $_user_mail = htmlspecialchars($_POST['mail']);
        $_user_phone = htmlspecialchars($_POST['mobile']);
        $_user_password = htmlspecialchars($_POST['password']);
        
        // j'instancie un objet $patientsObj avec la class Patients
        $usersObj = new Users();

        // Je fais appelle à la méthode addPatient pour ajouter mon patient : Attention bien respecter l'ordre des paramètres
        $patientsObj->addPatient($lastname, $firstname, $phoneNumber, $address, $mail);

        // Si tout est ok, nous retournons sur une page données
        header('Location: dashboard.php');

    }

}