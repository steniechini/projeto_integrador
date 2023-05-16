<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilo.css">
  <!-- BBootstrap Icons via CDN --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <title>Contato</title>
    </head>
    <body class="body_contato">
    <?php include("header.php")?>

    <main>
      <section id="login">
        <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <div class="form-wrap">
                    <h1>Contato</h1>
                    <div class="form-group">
                      <label for="text" class="sr-only">Nome</label>
                      <input type="text" name="text" id="text" class="form-control" placeholder="Nome">
                  </div>
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="seunome@exemplo.com">
                            </div>
                            <div class="form-group">
                              <label for="text" class="sr-only">Escreva uma mensagem</label>
                              <input type="text" name="text" id="text" class="form-control" placeholder="Escreva aqui">
                          </div>
                            
                           <div>
                            <button class="custom-btn btn-1"><span>Bem vindo</span><span>Entrar</span></button>
                          </div>
                  </div>
            </div> 
            </div>
          </div> 
       
    </section>
    
  

</main>
<?php include("footer.php") ?>
</body>
</html>