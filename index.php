<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONALIZE SUA INTERFACE</title>

    <?php 
        include 'compara.inc';
    ?>

    <link rel="stylesheet" href="bootstrap\css\bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row area">
            <div class="col-sm-12 bg-light">
                <<?php 
                    if(ISSET($_COOKIE["corperso"])){
                        echo "img src='img/". $_COOKIE["corperso"]. ".jpg' width='100%' height='100%'>";
                    }
                    else{
                        echo "<img src='img/azul.jpg' width='100%' height='100%' class='img-fluid'>";
                    }
                        

                ?>
            </div>
        </div>
        <br>

        <div class="row area">
            <div class="col-sm-12 bg-light">
                <h6><p align="right">
                    Personalizar sua INTERFACE
                    <a href="cookie.php?id=azul">
                        <img src="img/btnazul.png" border="no" width=30 height=30>

                    </a> &nbsp; &nbsp;
                    <a href="cookie.php?id=vermelho">
                        <img src="img/btnvermelho.jpg" border="no" width=30 height=30>

                    </a> &nbsp; &nbsp;
                    <a href="cookie.php?id=verde">
                        <img src="img/btnverde.png" border="no" width=30 height=30>

                    </a> &nbsp; &nbsp;
                </p></h6>
            </div>
        </div>
        <!-- Vamos  criar um menu em bootstrap-- -->
        <nav class="navbar navbar-expand-lg navbar-dark azul">
            <a class="navbar-brand" href="#">MINHA MARCA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destaques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Preços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Desativado</a>
                </li>
                </ul>
            </div>
        </nav>
        <!-- FIM DA NAVBAR-->
        <br>

        <div class="row bg-lightarea">
            <div class="col-sm-12 bg-light">
                <h3>SOBRE NÓS</h3>
                <br><br>
                xxxxxxx <br>
                xxxxxxx <br>
                xxxxxxx <br>
                xxxxxxx <br>
                xxxxxxx <br>
            </div>
        </div>

        <br><br>

        <div class="row rodape">
            <div class="col-sm-12 text-light">
                <h3>rodapé</h3>
            </div>
        </div>

    </div>

    <script src="javascript\jquery.js"></script>
    <script src="bootstrap\js\bootstrap.js"></script>
</body>
</html>