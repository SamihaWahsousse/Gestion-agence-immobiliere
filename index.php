<?php
require_once('bdd/config.php');
include_once('includes/header.php');
require_once('lib/afficheannonce.php');

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
                                <li><a class="dropdown-item" href="register.php">S'inscrire</a></li>
                                <li><a class="dropdown-item" href="login.php">Se connecter</a></li>
                                <li><a class="dropdown-item" href="#">se déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--Searchebar-->
    <main>
        <section class="search-bar mt-2">
            <div class="container-fluid ">
                <div class="row justify-content-start flex-nowrap align-items-center ">
                    <div class="col-lg-10 w-50 mx-auto p-1 bg-light shadow-sm">
                        <form action="search.php" method="POST">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Quelle région? Quelle ville?.."
                                    class="form-control me-2">
                                <div class="input-group-append">
                                    <!-- Bouton rechercher -->
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-secondary" name="submit_search">
                                            Rechercher
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Bouton ajouter annonce-->
                    <div class="col-lg-1 w-25 text-center flex-end">
                        <a href="includes/addAnnonce.php" class="btn btn-secondary" type="button">
                            + Ajouter annonce
                        </a>
                    </div>
                    <div class="col-1 d-flex align-items-center justify-content-start">
                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;height:14px;width:14px;fill:currentColor" aria-hidden="true"
                            role="presentation" focusable="false">
                            <path
                                d="M5 8c1.306 0 2.418.835 2.83 2H14v2H7.829A3.001 3.001 0 1 1 5 8zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm6-8a3 3 0 1 1-2.829 4H2V4h6.17A3.001 3.001 0 0 1 11 2zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                            </path>
                        </svg>
                        <p class="mb-0 ms-2">Filtre</p>

                    </div>

                </div>

            </div>

        </section>


        <section>
            <?php if (isset($_GET['page'])) {
                $page = $_GET['page'];
                afficheAnnonce($page, 6);
            } else {
                afficheAnnonce(1, 6);
            }
            ?>


        </section>
        <!--Modal Ajouter annonce -->

        <div class="modal fade" id="modalAddAnnonce" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajout nouvelle annonce</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="fermer"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" class=" text-center " id="formAddAnnonce">
                            <div class="mb-2 form-floating">
                                <input type="text" class="form-control" id="inputAnnonce"
                                    placeholder="Saisissez titre de votre annonce" name="inputAnnonce">
                                <label for="inputAnnonce" class="form-label">Titre</label>
                            </div>

                            <div class="mb-2 form-floating mt-2">
                                <input type="text" class="form-control" id="inputDescription"
                                    placeholder="Saisissez la description" name="inputDescription">
                                <label for="inputDescription" class="form-label">Description</label>
                            </div>

                            <div class="mb-2 form-floating mt-2">
                                <input type="text" class="form-control" id="inputDate" placeholder="DD/MM/YYYY"
                                    name="inputDate">
                                <label for="inputDate" class="form-label">Date annonce</label>
                            </div>
                            <div class="mb-2 form-floating mt-2">
                                <input type="text" class="form-control" id="inputPrice"
                                    placeholder="Saisissez le prix de logement" name="inputPrice">
                                <label for="inputPrice" class="form-label">Prix</label>
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="formAddFood" class="btn btn-primary"
                                id="btnAddAnnonce">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>







    </main>

























    <footer class="my-auto ">
        <div class="row">
            <div class="col-sm mb-0">
                <p class="text-center text-light bg-dark mb-0"> © copyright 2023 - Mentions légales</p>
            </div>

        </div>

    </footer>


</body>


</html>