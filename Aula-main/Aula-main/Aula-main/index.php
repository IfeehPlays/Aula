<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Barbearia</title>
    
</head>
<body>

  <?php

        $produto1 = array('nome'=>'Corte', 'img'=>'img/card1.jpg');
        $produto2 = array('nome'=>'Barba', 'img'=>'img/card1.jpg');
        $produto3 = array('nome'=>'Luzes', 'img'=>'img/card1.jpg');
        $produto4 = array('nome'=>'João Victor', 'img'=>'img/barbeiro.avif');
        $produto5 = array('nome'=>'João Victor', 'img'=>'img/barbeiro.avif');
        $produto6 = array('nome'=>'João Victor', 'img'=>'img/barbeiro.avif');

        $produtos = array($produto1, $produto2, $produto3);
        $product = array($produto4, $produto5, $produto6);

        // print_r($produtos);
    ?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contatos</a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/img-principal.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/img-principal.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/img-principal.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  </div>

      <div class="servicos">
    <h2 style="color:white">Serviços</h2>

    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < count($produtos); $i++) {
                $produto = $produtos[$i];
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $produto['img']; ?>" class="img-thumbnail card-img-top" alt="Card 1">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>


      <div class="sobre">
        <h2 style="color:white" >Sobre</h2>
        <p style="color:white">Aqui é o lugar ideal para o seu corte. Ambiente profissional mas sem retirar a melhor parte: o bom humor.</p>
      </div>

      <div class="equipe">
        <h2 style="color:white;">Equipe</h2>
        
        <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < count($product); $i++) {
                $produto = $product[$i];
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $produto['img']; ?>" class="img-thumbnail card-img-top" alt="Card 1">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        
    </div>
</div>
  
      
      <div class="end">
        <p>
          Desenvolvido por Wesley de Sousa
        </p>
      </div>
</body>
</html>