<?php
session_start();

require_once "../controllers/rss-controllers.php";
?>


<?php include '../elements/meta.php' ?>


<body>
    <?php include '../elements/navBar.php' ?>


    <div class="row m-0 p-0 justify-content-evenly">
            <?php
            for ($i = 1; $i <= 6; $i++) { ?>
                <div class="rounded border border-secondary col-lg-10 m-2 bg-light text-center">
                    <img src="<?= $flux1[$i]->enclosure['url'] ?>" alt="<?= $flux1[$i]->enclosure['url'] ?>" class="imgSize my-2">
                    <p class="text-start px-1"><b><?= $flux1[$i]->title ?></b></p>
                    <p class="text-start px-1"><?= strftime($date_format, strtotime($flux1[$i]->pubDate)) ?></p>
                    <a href="<?= $flux1[$i]->link ?>" target="_blank" class="btn btn-success text-center mb-3"><u>Ouvrir l'article</u></a>
                </div>
            <?php } ?>

    </div>




    <?php include '../elements/footer.php' ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>