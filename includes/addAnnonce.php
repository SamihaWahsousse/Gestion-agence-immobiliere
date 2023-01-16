<?php
include_once('header.php');
require_once('../bdd/config.php');
require_once('../lib/Query.php');
require_once('../lib/utilities.php');


?>


<body>
    <header>
        <!-- Just an image -->
        <nav class="navbar navbar-light logo justify-content-start bg-light py-0">
            <a class="navbar-brand" href="../index.php">
                <img src="../Logo_POOIMMO.png" width="200" height="100" alt="">
            </a>
            <div class="my-1">
                <h3> Ajouter nouvelle annonnce </h3>
            </div>
        </nav>

    </header>



    <body>


        <div class="container d-flex flex-column mt-4 py-0">

            <form method="post" enctype="multipart/form-data" action="../lib/action.php" name="test">
                <div class="row justify-content-around ">
                    <div class="col-4 my-0">

                        <div class="form-group ">
                            <label for="typeImmo" class="form-label">Titre de l'annonce* :
                            </label>
                            <input type="text" class="form-control text-muted" id="inputPrenom" name="Titre"
                                placeholder="Titre" required autocomplete="off">
                        </div>

                        <div class="form-group my-3 ">
                            <label for="typeImmo" class="form-label">Selectionner le type de bien immobilier : </label>
                            <?php $var = new Query();
                            $var->findAll($conn, 'type_propriete', 'id', 'type'); ?>

                        </div>

                        <div class="form-group my-3 ">
                            <label for="descriptif" class="form-label"> Descriptif de l'annonce* : </label>
                            <textarea class="form-control descriptif" id="descriptif" name="descriptif"></textarea>
                        </div>

                        <div class="form-group my-3 "> <label for="surface" class="form-label">
                                Adresse du propriété* : </label>
                            <input type="text" class="form-control" id="adresse" name="adresse">
                        </div>

                        <div class="form-group my-3 ">
                            <label for="region" class="form-label">Quelle région ?</label>
                            <?php
                            $var->findAll($conn, 'region', 'id', 'nom'); ?>
                        </div>
                        <div class="form-group my-3">
                            <label for="ville" class="form-label">Quelle ville ?</label>
                            <?php
                            $var->findAll($conn, 'ville', 'id', 'nom'); ?>
                        </div>

                    </div>

                    <div class="col-4">

                        <div class="form-group my-3 ">
                            <label for="surface" class="form-label">
                                Quelle est la surface de votre bien ?
                            </label>
                            <input type="text" class="form-control" id="surface" name="surface">
                        </div>
                        <div class="form-group my-3 ">
                            <label for="piece" class="form-label">Combien de pièces ?</label>
                            <input type="text" class="form-control" id="piece" name="piece">
                        </div>

                        <legend class="legend-size">Garage</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="garage" id="garage_exist" value="1"
                                checked="checked">
                            <label class="form-check-label" for="garage_exist">Avec</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="garage" id="garage_notexist" value="0">
                            <label class="form-check-label" for="garage_notexist">Sans</label>
                        </div>

                        <div class="form-group my-3 ">
                            <label for="prix" class="form-label">Prix en €</label>
                            <input type="text" class="form-control" id="prix" name="prix" required>
                        </div>
                        <div>
                            <legend class="legend-size">Action</legend>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="action_prop" id="vente" value="vente"
                                    required>
                                <label class="form-check-label" for="vente">Vente</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="action_prop" id="location"
                                    value="location">
                                <label class="form-check-label" for="location">location</label>
                            </div>


                            <label for="photo" class="form-label">Ajouter photos</label>
                            <input class="form-control form-control-sm" id="photo" type="file" name="files[]"
                                multiple />

                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-success w-25 text-center" value="submit">Créer</button>
                </div>
            </form>



        </div>
        </main>







    </body>