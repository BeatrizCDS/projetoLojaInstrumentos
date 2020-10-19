<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Adm/Sol</title>
    </head>
    <body>
        <?php
            include_once("valida-sentinela-adm.php");
        ?>
        
            <div class="menu-navbar" id="menu-inicio-adm">
                <nav id="mensagem" class="navbar navbar-expand-lg navbar-dark "style="background-color: #141513;color:white;">
                    <strong>
                        Bem vindo administrador!
                    </strong>
                    <ul class="nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="#section1">Produtos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#section2">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">Vendas</a>
                      </li>
                    <li>
                    <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                  </ul>
                </nav>
            </div>        
        <div id="container-adm">
            <div id="box-adm">
                <div id="section1">
                    <br><br><br>
                        <h1 id="textCadastro" style="color:rgb(61, 61, 61);text-align: center;">Cadastro de Produtos</h1>
                    <br>
                    <form name='cadastro-produtos' enctype="multipart/form-data" action='cadastrar-produto.php' method='post'>
                        <label style="font-size:17px">Descrição:</label>
                        <input type='text' name='txtdesc' size="50">
                        <br>
                        <label style="font-size:17px">Valor:</label>
                        <input type='text' name='txtvalor' size="50">
                        <br><br>
                        <label style="font-size:17px">Quantidade em estoque:</label>
                        <input type='text' name='txtqtde' size="50">
                        <br>
                        <label style="font-size:17px">Foto:</label>
                        <input type="file" id="foto" name="foto" size="50" accept="image/*">
                        <br>
                        <input type='submit' value='Cadastrar'>
                    </form>
                </div>
                <div id="section2">
                    <div class="section-div">
                        Clientes
                    </div>
                </div>
                <div id="section3">
                    <div class="section-div">
                        Vendas
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>  