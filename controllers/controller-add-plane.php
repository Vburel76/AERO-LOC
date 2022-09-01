<?php




$showForm = true;
$errors = [];
$regexletter = "/^[a-zA-Zéèêë]+$/";
$regexnum = "/^[0-9]+$/";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['namePlane'])) {

        if ($_POST['namePlane'] == '') {
            $errors['namePlane'] = "champ obligatoire";
        } else if (!preg_match($regexletter, $_POST['namePlane'])) {
            $errors['namePlane'] = "Mauvais format";
        }
    }


    if (isset($_POST['size'])) {

        if ($_POST['size'] == '') {
            $errors['size'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['size'])) {
            $errors['size'] = "Mauvais format";
        }
    }

    if (isset($_POST['scope'])) {

        if ($_POST['scope'] == '') {
            $errors['scope'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['scope'])) {
            $errors['scope'] = "Mauvais format";
        }
    }


    if (isset($_POST['autonomy'])) {

        if ($_POST['autonomy'] == '') {
            $errors['autonomy'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['autonomy'])) {
            $errors['autonomy'] = "Mauvais format";
        }
    }

    if (isset($_POST['altitude'])) {

        if ($_POST['altitude'] == '') {
            $errors['altitude'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['altitude'])) {
            $errors['altitude'] = "Mauvais format";
        }
    }

    if (isset($_POST['speed'])) {

        if ($_POST['speed'] == '') {
            $errors['speed'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['speed'])) {
            $errors['speed'] = "Mauvais format";
        }
    }

    // image

    if (isset($_POST['description'])) {

        if ($_POST['description'] == '') {
            $errors['description'] = "champ obligatoire";
        } else if (!preg_match($regexletter, $_POST['description'])) {
            $errors['description'] = "Mauvais format";
        }
    }
}