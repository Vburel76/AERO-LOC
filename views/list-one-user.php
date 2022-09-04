<?php
session_start();
require_once('../controllers/controller-list-one-user.php');
require_once('../config.php');
require_once('../models/database.php');
require_once('../models/users.php');
?>

<?php include '../elements/meta.php' ?>


<body class="d-flex flex-column min-vh-100">
<a href="user-list.php">Retour</a>

    <p class="fs-2 text-center m-5">LISTE DES UTILISATEURS</p>

    <div class="row m-0 p-0 justify-content-center">
        <div class="col-lg-8 text-center">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">mail</th>
                        <th scope="col">role</th>


                    </tr>
                </thead>
                <tbody class="p-5">
                    <?php
                    foreach ($users as $value) { ?>
                        <tr>
                            <th class="pt-3"><?= $value['user_id'] ?></th>
                            <td class="pt-3"><?= $value['user_lastname'] ?></td>
                            <td class="pt-3"><?= $value['user_firstname'] ?></td>
                            <td class="pt-3"><?= $value['user_phone'] ?></td> 
                            <td class="pt-3"><?= $value['user_mail'] ?></td>
                            <td class="pt-3"><?= $value['role_name'] ?></td> 
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../dist/js/lightbox-plus-jquery.js"></script>
    <script src="../dist/js/lightbox.js"></script>
</body>

</html>