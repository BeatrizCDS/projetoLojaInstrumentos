<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>
            Sol Instrumentos Musicais
        </title>
    </head>
    <body>
        <div class="container-index">
            <div class="menu-navbar" id="menu-inicio">
                <nav class="navbar navbar-expand-lg navbar-dark "style="background-color: #141513;">
                    <a class="navbar-brand" href="index.php"><img class="imgNav" src="img/SolSfSsss.png"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="violao.php">Violões</a>
                                    <a class="dropdown-item" href="violino.php">Violinos</a>
                                    <a class="dropdown-item" href="ukulele.php">Ukuleles</a>
                                    <a class="dropdown-item" href="acessorio.php">Acessórios para Instrumentos</a>
                                </div>
                            </li>
                            <a class="nav-item nav-link" href="contato.php">Fale Conosco</a>
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="carousel-index">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="img1" class="d-block w-100" src="img/1.jpeg" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img1" class="d-block w-100" src="img/22.png" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img1" class="d-block w-100" src="img/33.png" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
            <div class="h2">
                <h2>Ofertas</h2>
            </div>               
            <div class="group">
                <div class="cards">
                    <div class="titulo-card">
                        <h5>Ukulele</h5>
                    </div>
                    <div class="image-card">
                        <img src="img/ukulele1.png">
                    </div>
                    <div class="cont-nav">
                        <p class="card-text">Ukulele Soprano Winner Azul</p>
                        <p class="card-text1"><strong>Valor: </strong>R$ 190,00</p>
                        <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="titulo-card">
                        <h5>Violão</h5>
                    </div>
                    <div class="image-card">
                        <img src="img/violao1.png">
                    </div>
                    <div class="cont-nav">
                        <p class="card-text">Violão Harmonics Eletroacústico</p>
                        <p class="card-text1"><strong>Valor: </strong>R$ 599,00</p>
                        <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="titulo-card">
                        <h5>Violino</h5>
                    </div>
                    <div class="image-card">
                        <img src="img/violino1.png">
                    </div>
                    <div class="cont-nav">
                        <p class="card-text">Violino Classic Series Envernizado</p>
                        <p class="card-text1"><strong>Valor: </strong>R$ 708,90</p>
                        <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                    </div>
                </div>
                <div class="cards">
                    <div class="titulo-card">
                        <h5>Acessório</h5>
                    </div>
                    <div class="image-card-acessorio">
                        <img src="img/acessorio1.png">
                    </div>
                    <div class="cont-nav">
                        <p class="card-text">Ukulele Soprano Winner Azul</p>
                        <p class="card-text1"><strong>Valor: </strong>R$ 190,00</p>
                        <a href="#" class="btn btn-outline-success">Add. ao Carrinho</a>
                    </div>
                </div>
            </div>
            <footer id="rodape">
            <!-- Copyright -->
                <div class="footer-copyright text-center py-3">
                    © 2020 Todos os Direitos Reservados 
                    </br>
                    Sol Instrumentos Musicais
                    </br>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>