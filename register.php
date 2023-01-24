<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="asset/css/styles.css">
    <title>Register page</title>
</head>

<body class="bg-light">
    <header>
        <!-- Just an image -->
        <nav class="navbar navbar-light logo">
            <a class="navbar-brand p-3" href="index.php">
                <img src="Logo_POOIMMO.png" width="300" height="150" alt="">

            </a>
        </nav>
    </header>

    <?php
    // connect to database
    require_once('bdd/config.php');

    require_once('lib/user.php');
    $user = new User($conn);

    // store user information into database
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user->register($prenom, $nom, $telephone, $email, $password);
    }

    $conn = null;
    //header('location:index.php');

    ?>

    <main>
        <div class="d-flex flex-column  justify-content-center align-items-center">
            <div class="my-2">
                <h1>Créer un compte</h1>
            </div>
            <form method="post">
                <div class="form-group my-3 ">
                    <input type="text" class="form-control text-muted" id="inputPrenom" name="prenom"
                        placeholder="Prénom" required>
                </div>
                <div class="form-group my-3 ">
                    <input type="text" class="form-control text-muted" id="inputNom" name="nom" placeholder="Nom"
                        required>
                </div>
                <div class="form-group my-3 ">
                    <input type="tel" class="form-control text-muted" id="inputTel" name="telephone"
                        placeholder="Téléphone" required>
                </div>
                <div class="form-group my-3 ">
                    <input type="email" class="form-control text-muted" id="inputEmail" name="email"
                        placeholder="E-mail" required>
                </div>
                <div class="form-group my-3">
                    <input type="password" class="form-control" id="inputPassword" name="password"
                        placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="btn btn-success w-50 " value="submit">Créer</button>
            </form>
        </div>
    </main>

    <footer>
        <div class="custom-shape-divider-bottom-1672913501">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </footer>
</body>

</html>