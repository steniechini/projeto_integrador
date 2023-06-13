<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilo.css">
  <!-- BBootstrap Icons via CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Restaurantes</title>
</head>



<body class="bodyrest">
  <?php include("header.php")?>

    <main>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div>
             
              <img class="img-fluid" src="img/resta.webp" alt="imagem cinza escrito Restaurantes com um prato branco e preto com vagem e filé de peixe">

            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="restsec">

            <div class="col-sm-8 col-md-8 col-10  m-3 rounded-4; cantina">
              <i class="bi bi-award" style="font-size: 35px; color:white"></i><br>
              <a class="textrest" href="cantinatialina.php">Cantina da Tia Lina</a>
            </div>
          </div>

          <div class="col-sm-8 col-md-8 col-10   m-3 rounded-4; cantina">
            <i class="bi bi-award" style="font-size: 35px; color:white"></i><br>
            <a class="textrest" href="olivardo.php">Quinta do Olivardo</a>

          </div>

          <div class="col-sm-8 col-md-8 col-10  m-3 rounded-4; cantina">
            <i class="bi bi-award" style="font-size: 35px; color:white"></i><br>
            <a class="textrest" href="donpatto.php">Vila Don Pato</a>
          </div>

          <div class="col-sm-8 col-md-8 col-10  m-3 rounded-4; cantina">
            <i class="bi bi-award" style="font-size: 35px; color:white"></i><br>
            <a class="textrest" href="vinicula_goes.php">Vinicula Góes</a>
          </div>
        </div>
      </div>


    </main>

    <?php include("footer.php") ?>

</body>

</html>