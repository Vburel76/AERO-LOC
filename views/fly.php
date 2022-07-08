<?php
require_once '../data/table.php';
?>

<?php include '../elements/meta.php' ?>

<body>
    <header class="text-center m-3">
        <h1>Aero-Loc</h1>
    </header>
    <?php include '../elements/navBar.php' ?>

    <h1 class="text-center">Présentation de la flotte</h1>


    <?php
    $start = 1;

    foreach ($tableFly as $key => $value) {
        if (($start % 2) == 0) { ?>
            <div class="row m-0 p-0 justify-content-center mt-5">
                <div class="col-lg-11 col-11 ">
                    <div class="row m-0 p-0  ">
                        <div class="col-lg-3 col-12 p-0 m-0 ">
                            <img class="imageFlotte" src="../public/img/<?= $value['planeImg'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body col-lg-9  col-9  ">
                            <p class="card-text fs-2 mx-1"><?= $value['title'] ?></p>
                            <div class="fs-4 mx-1">
                                <p>Le Robin DR400 est un avion de tourisme monomoteur très utilisé dans les aéroclubs, produit par la société Robin Aircraft, anciennement appelée Avions Pierre Robin.</p>
                            </div>
                            <div class="row justify-content-start  m-0 p-0">
                                <ul class="col-lg-3 col-11   mx-3 ">
                                    <li class="fs-5"><?= $value['size'] ?></li>
                                    <li class="fs-5"><?= $value['place'] ?></li>
                                    <li class="fs-5"><?= $value['scope'] ?></li>
                                </ul>
                                <ul class="col-lg-3 col-11  mx-3 ">
                                    <li class="fs-5"><?= $value['autonomy'] ?></li>
                                    <li class="fs-5"><?= $value['altitude'] ?></li>
                                    <li class="fs-5"><?= $value['speed'] ?></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            
            <!-- second block  -->

            <div class="row m-0 p-0 justify-content-center mt-5">
                <div class="col-lg-11 col-11 ">
                    <div class="row m-0 p-0 ">
                        <div class="col-lg-3 col-12 p-0 m-0  d-lg-none d-block">
                            <img class="imageFlotte" src="../public/img/<?= $value['planeImg'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body col-lg-9  col-9  ">
                            <p class="card-text fs-2 mx-1"><?= $value['title'] ?></p>
                            <div class="fs-4 mx-1">
                                <p>Le Robin DR400 est un avion de tourisme monomoteur très utilisé dans les aéroclubs, produit par la société Robin Aircraft, anciennement appelée Avions Pierre Robin.</p>
                            </div>
                            <div class="row justify-content-end  m-0 p-0">
                                <ul class="col-lg-3 col-11   mx-3 ">
                                    <li class="fs-5"><?= $value['size'] ?></li>
                                    <li class="fs-5"><?= $value['place'] ?></li>
                                    <li class="fs-5"><?= $value['scope'] ?></li>
                                </ul>
                                <ul class="col-lg-3 col-11  mx-3 ">
                                    <li class="fs-5"><?= $value['autonomy'] ?></li>
                                    <li class="fs-5"><?= $value['altitude'] ?></li>
                                    <li class="fs-5"><?= $value['speed'] ?></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-12 p-0 m-0  d-lg-block d-none">
                            <img class="imageFlotte" src="../public/img/<?= $value['planeImg'] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        $start++;
        ?>

    <?php } ?>








    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>