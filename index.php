<?php
include_once('includes/header.php');
?>



<body>
    <!-- je met le script javascript bootstrapp -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- ici je fais mon responsive avec bootstrapp -->

    <!--navbar-->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img class="logo" src=" ./Logo_POOIMMO.png" alt="logo" width="50%" height="50%">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="#">Achat</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Vente</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Location</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-list" viewBox="0 0 18 18">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 18 18">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Inscription</a></li>
                                <li><a class="dropdown-item" href="#">Connexion</a></li>
                                <li><a class="dropdown-item" href="#">Contactez-nous</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--Searchebar-->
    <main>
        <section class="search-bar mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto p-1 bg-light shadow-sm">
                        <form>
                            <div>
                                <div class="input-group">
                                    <input type="search" placeholder="Quelle région? Quelle ville?.."
                                        class="form-control">
                                    <div class="input-group-append">

                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Rechercher
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                                        </svg>Maison/Appartement</a></li>
                                                <li><a class="dropdown-item" href="#"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                                            <path
                                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                                        </svg>Locaux
                                                        commerciaux</a></li>
                                                <li><a class="dropdown-item" href="#"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-p-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 4.002h2.962C10.045 4.002 11 5.104 11 6.586c0 1.494-.967 2.578-2.55 2.578H6.784V12H5.5V4.002Zm2.77 4.072c.893 0 1.419-.545 1.419-1.488s-.526-1.482-1.42-1.482H6.778v2.97H8.27Z" />
                                                            <path
                                                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2Zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2Z" />
                                                        </svg>Garages/parking</a></li>


                                            </ul>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">


                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;height:14px;width:14px;fill:currentColor" aria-hidden="true"
                            role="presentation" focusable="false">
                            <path
                                d="M5 8c1.306 0 2.418.835 2.83 2H14v2H7.829A3.001 3.001 0 1 1 5 8zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm6-8a3 3 0 1 1-2.829 4H2V4h6.17A3.001 3.001 0 0 1 11 2zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                            </path>
                        </svg>
                        <p class="mb-0 ms-2">filtre</p>

                    </div>
                </div>
            </div>

        </section>

        <section>


            <div class="container fluid">
                <div class="row my-3">
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/App1.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Grenoble,France</h5>
                                <p class="card-text">Apparetement 3 pièces
                                    2 chambres
                                    55 m²
                                    Étage 1/4.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/App2.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Lyon,France</h5>
                                <p class="card-text">Appartement à vendre
                                    2 pièces, 1 chambre, 50 m², Étage 1/4
                                    Quartier Abry à Grenoble (38100).</p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/App3.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Paris,France</h5>
                                <p class="card-text">Some quick example text to build on the ,France and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/App4.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Lille,France</h5>
                                <p class="card-text">Some quick example text to build on the ,France and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/App5.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Fotaine,France</h5>
                                <p class="card-text">Some quick example text to build on the ,France and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/App6.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Echirolle,France</h5>
                                <p class="card-text">Some quick example text to build on the ,France and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/Maison1.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Saint Martin d'Heres,France</h5>
                                <p class="card-text">Some quick example text to build on the ,France and make up the
                                    bulk of the card's content.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/Maison2.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Nice,France</h5>
                                <p class="card-text">Appartement à vendre
                                    2 pièces
                                    1 chambre
                                    45 m²
                                    Étage 5/6
                                    379 000 €
                                    Quartier Grenier Point du Jour à Boulogne-Billancourt (92100).</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 14rem;">
                            <img src="photoImmo/Maison2.jpg" class="card-img-top" alt="photoImmo/App1.jpg">
                            <div class="card-body">
                                <h5 class="card-title">fin</h5>
                                <p class="card-text">Appartement à vendre
                                    2 pièces
                                    1 chambre
                                    45 m²
                                    Étage 5/6
                                    379 000 €
                                    Quartier Grenier Point du Jour à Boulogne-Billancourt (92100).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>

























    <footer class="fixed-bottom ">
        <div class="row">
            <div class="col-sm">
                <p class="text-center text-light bg-dark"> © copyright 2023 - Mentions légales</p>
            </div>

        </div>

    </footer>


</body>


</html>