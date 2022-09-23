<?php include '../elements/meta.php' ?>

    <?php include '../elements/navBar.php' ?>

    <div class="row m-3 p-0 justify-content-center">
        <div class="col-lg-8 col-10 mt-5">
            <p class="mb-3 fs-4 fontTitle text-center">Formulaire de contact</p>
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class=" fontText" for="firstName">Prénom</label>
                        <input type="text" name="firstName" class="form-control cardColor" id="firstname" placeholder="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class=" fontText" for="lastName">Nom</label>
                        <input type="text" name="lastname" class="form-control cardColor" id="lastname" placeholder="" required>
                    </div>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label class=" fontText" for="email">Email</label>
                    <input type="email" class="form-control cardColor" id="mail" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label class=" fontText" for="object">Objet</label>
                    <input type="text" class="form-control cardColor" id="object" name="object" required>
                </div>

                <div class="form-group">
                    <label class=" fontText" for="textmail">Message</label>
                    <textarea name="textmail" class="form-control cardColor" id="textmail" rows="12"></textarea>
                </div>

                <div class="row justify-content-center m-3">
                        <input type="submit" class="btn col-lg-3 TextcolorPagePlane">Envoyer</input>
                </div>
            </form>

            <?php 
            if(isset($_POST['textmail'])){
                $retour = mail('aeroloc76@gmail.com',$_POST['objet'],$_POST['textmail'],'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
                if($retour){
                    echo '<p>votre message est bien envoyé.</p>';
                }
            }
            ?>
        </div>
    </div>
    <?php include '../elements/footer.php' ?>
