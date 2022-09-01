<?php




$showForm = true;
$errors = [];
$regexletter = "/^[a-zA-Zéèêë]+$/";
$regexnum = "/^[0-9]+$/";



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['namelocPlane'])) {

        if ($_POST['namelocPlane'] == '') {
            $errors['namelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexletter, $_POST['namelocPlane'])) {
            $errors['namelocPlane'] = "Mauvais format";
        }
    }


    if (isset($_POST['sizelocPlane'])) {

        if ($_POST['sizelocPlane'] == '') {
            $errors['sizelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['sizelocPlane'])) {
            $errors['sizelocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['scopelocPlane'])) {

        if ($_POST['scopelocPlane'] == '') {
            $errors['scopelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['scopelocPlane'])) {
            $errors['scopelocPlane'] = "Mauvais format";
        }
    }


    if (isset($_POST['autonomylocPlane'])) {

        if ($_POST['autonomylocPlane'] == '') {
            $errors['autonomylocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['autonomylocPlane'])) {
            $errors['autonomylocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['altitudelocPlane'])) {

        if ($_POST['altitudelocPlane'] == '') {
            $errors['altitudelocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['altitudelocPlane'])) {
            $errors['altitudelocPlane'] = "Mauvais format";
        }
    }

    if (isset($_POST['speedlocPlane'])) {

        if ($_POST['speedlocPlane'] == '') {
            $errors['speedlocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexnum, $_POST['speedlocPlane'])) {
            $errors['speedlocPlane'] = "Mauvais format";
        }
    }

    // image

    if (isset($_POST['descriptionlocPlane'])) {

        if ($_POST['descriptionlocPlane'] == '') {
            $errors['descriptionlocPlane'] = "champ obligatoire";
        } else if (!preg_match($regexletter, $_POST['descriptionlocPlane'])) {
            $errors['descriptionlocPlane'] = "Mauvais format";
        }
    }
}