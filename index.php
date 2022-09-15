<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/phosphor-icons"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>SIGMA EAD</title>
</head>

<body>

<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="?page=home">CETES</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=cursos">Cursos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</header>



<main>
        <?php
        switch(@$_REQUEST ["page"]){
            case "cursos":
            include("cursos.php");
            break;
            case "curso":
                include('curso.php');
                break;
            default:
            include('home.php');
        }
        ?>
</main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Redes Sociais</h4>
                    <div class="icons">
                        <a href="https://www.instagram.com/sigmacolegio/"><i class="ph-instagram-logo-thin"></i></a>
                        <a href="https://www.facebook.com/sigmalages"><i class="ph-facebook-logo-thin"></i></a>
                        <a href="https://www.youtube.com/c/Col%C3%A9gioSigmaLages"><i class="ph-youtube-logo-thin"></i></a>
                        <a
                            href="https://br.linkedin.com/in/col%C3%A9gio-sigma-lages-sc-3a490122b?trk=public_profile_samename-profile"><i
                                class="ph-linkedin-logo-thin"></i></a>
                        <a href="https://www.colegiosigma.com.br/"><i class="ph-browser-thin"></i></a>
                        <a href="https://www.google.com/"><i class="ph-google-chrome-logo-thin"></i></a>
                        <a href="https://web.whatsapp.com/"><i class="ph-whatsapp-logo-thin"></i></a>

                    </div>
                    <a href="#">Política de privacidade</a>
                    <p>&copy; Sigma 2022 - Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </footer>
   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>