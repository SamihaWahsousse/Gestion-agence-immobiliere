<?php
include_once('header.php');

?>


<body>
    <header>
        <!-- Just an image -->
        <nav class="navbar navbar-light logo justify-content-start bg-light">
            <a class="navbar-brand" href="../index.php">
                <img src="../Logo_POOIMMO.png" width="300" height="150" alt="">
            </a>
            <h2> Ajouter nouvelle propriete </h2>
        </nav>

    </header>

    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center w-60 ">
            <div class="col-10 col-md-8 col-lg-6">
                <form>

                    <div class="mb-3 mt-2">
                        <label for="typeImmo" class="form-label">Selectionner votre type de bien immobilier : </label>
                        <select class="form-select" id="typeImmo" name="listImmo">
                            <option>Appartement</option>
                            <option>Maison</option>
                            <option>Local commercial</option>
                            <option>Garage</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="action" class="form-label">Selectionner votre action : </label>
                        <select class="form-select" id="typeImmo" name="action">
                            <option>Louer</option>
                            <option>Vendre</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="surface" class="form-label">
                            Quelle est la surface de votre bien ?
                        </label>
                        <input type="text" class="form-control" id="surface">
                    </div>

                    <div class="mb-3">
                        <label for="piece" class="form-label">Combien de pièces ?</label>
                        <input type="text" class="form-control" id="piece">
                    </div>
                    <div class="mb-3">
                        <label for="annee" class="form-label">Année de construction</label>
                        <input type="date" class="form-control" id="annee">
                    </div>

                    <div class="mb-3">
                        <label for="region" class="form-label">Quelle région ?</label>
                        <select class="form-select" id="region" name="region">
                            <option>Auvergne-Rhone-Alpe</option>
                            <option>Bourgogne-Franche-Comté </option>
                            <option>Hauts-de-France</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ville" class="form-label">Quelle ville ?</label>
                        <select class="form-select" id="ville" name="ville">
                            <option>Grenoble</option>
                            <option>Paris </option>
                            <option>Nice</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nbGarage" class="form-label">Quelle ville ?</label>
                        <select class="form-select" id="nbGarage" name="nbGarage">
                            <option>0</option>
                            <option>1 </option>
                            <option>2</option>

                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>








</body>