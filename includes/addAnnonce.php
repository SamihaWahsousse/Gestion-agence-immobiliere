<?php
include_once('header.php');

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

            <form method="post">
                <div class="row justify-content-around ">
                    <div class="col-4 my-0">

                        <div class="form-group ">
                            <label for="typeImmo" class="form-label">Titre de l'annonce
                            </label>
                            <input type="text" class="form-control text-muted" id="inputPrenom" name="Titre"
                                placeholder="Prénom" required>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="typeImmo" class="form-label">Selectionner le type de bien immobilier :
                            </label>
                            <select class="form-select" id="typeImmo" name="listImmo">
                                <option>Appartement</option>
                                <option>Maison</option>
                                <option>Local commercial</option>
                                <option>Garage</option>
                            </select>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="typeImmo" class="form-label">Titre de l'annonce
                            </label>
                            <input type="text" class="form-control text-muted" id="inputPrenom" name="Titre"
                                placeholder="Prénom" required>
                        </div>
                        <div class="form-group my-3 "> <label for="surface" class="form-label">
                                Descriptif de l'annonce?
                            </label>
                            <input type="text" class="form-control" id="surface">
                        </div>
                        <div class="form-group my-3 "> <label for="surface" class="form-label">
                                Adresse du propriété
                            </label>
                            <input type="text" class="form-control" id="surface">
                        </div>
                        <div class="form-group my-3 ">
                            <label for="surface" class="form-label">
                                Quelle est la surface de votre bien ?
                            </label>
                            <input type="text" class="form-control" id="surface">
                        </div>

                    </div>

                    <div class="col-4 my-0">

                        <div class="form-group my-3 ">
                            <label for="piece" class="form-label">Combien de pièces ?</label>
                            <input type="text" class="form-control" id="piece">
                        </div>
                        <div class="form-group my-3 ">
                            <label for="region" class="form-label">Quelle région ?</label>
                            <select class="form-select" id="region" name="region">
                                <option>Auvergne-Rhone-Alpe</option>
                                <option>Bourgogne-Franche-Comté </option>
                                <option>Hauts-de-France</option>
                            </select>
                        </div>
                        <div class="form-group my-3">
                            <label for="ville" class="form-label">Quelle ville ?</label>
                            <select class="form-select" id="ville" name="ville">
                                <option>Grenoble</option>
                                <option>Paris </option>
                                <option>Nice</option>

                            </select>
                        </div>
                        <legend class="legend-size">Garage</legend>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Avec</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Sans</label>
                        </div>
                        <div class="form-group my-3 ">
                            <label for="piece" class="form-label">Prix en €</label>
                            <input type="text" class="form-control" id="piece">
                        </div>
                        <div>
                            <legend class="legend-size">Action</legend>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Vente</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">location</label>
                            </div>
                            <label for="formFileSm" class="form-label">Ajouter photos</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file" />

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