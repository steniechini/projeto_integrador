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
        <title>HOME</title>
    </head>
    <body>
      <?php include("header.php")?>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <header class="col-12 text-center ">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/car000.webp"  class="d-block w-100" alt="colagem de imagens contendo comida, frutas e vinho">
                  </div>
                  <div class="carousel-item">
                    <img src="img/car01.webp" class="d-block w-100" alt="colagem de imagens contendo comida, frutas e vinho">
                  </div>
                  <div class="carousel-item">
                    <img src="img/car02.webp" class="d-block w-100" alt="colagem de imagens contendo comida, frutas e vinho">
                  </div>
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </header>
            
          </div>
        </div>
          </div>
        </div>
        
      
       
        <main>
        <div class="container">
      
          <section class="text-center">
            <div class="row">
              <div class="col-sm-2 col-md-3 col-3 nav1">
                <img src="img/pratos.webp" width="200" height="200" alt="Desenho de um prato com garfo e faca ao lado, com a palavra pratos escrita embaixo.">
              </div>

              <div class="col-sm-2 col-md-3 col-3 nav2">
                <img src="img/lembranca.webp" width="200" height="200" alt="Desenho de uma xicara com a palavra lembranças escritas embaixo">
              </div>

              <div class="col-sm-2 col-md-3 col-3 nav3" >
                <img src="img/momentos.webp" width="200" height="200" alt="Desenho de um emoticon feliz com a palavra momentos escrita embaixo">
              </div>

              <div class="col-sm-2 col-md-3 col-3 nav3" >
                <img src="img/vinhos.webp" width="200" height="200" alt="Desenho de duas taças de vinho com a palavra vinhos escrita embaixo">
              </div>

             

            </div>
          </section>   
        </div>
    
          <div class="container">
            <div class="row">
        
                <div class="  col-sm-8 col-md-8 col-10 hometext"> 
                    <section>
                      <h1 class="h1home">Bem Vindo</h1>
                       <p class="phome"> Bem-vindo ao Portal de Restaurantes do Roteiro do Vinho de São Roque! Descubra a deliciosa culinária e os vinhos premiados desta região encantadora. Explore nossas opções gastronômicas únicas, dos tradicionais aos contemporâneos.Venha viver uma experiência gastronômica inesquecível.</p>
                    </section>
                   
                  </div>
              <div class=" col-md-4 col-sm-4 col-10">
               
                 
                       <aside>
                        <img src="img/colher.webp" width="400" height="235" alt="Quatro colheres com tempeiros">
                     </aside>  
              </div>
              
            </div>
           </div>
          </main>

          <div class="footerhome">
<?php include("footer.php") ?>
</div>
 
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>         
</body>
</html>
