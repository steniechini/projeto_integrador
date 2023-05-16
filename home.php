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
                    <img src="img/food2.jpg"  class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/food4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/food3.jpg" class="d-block w-100" alt="...">
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
                <img src="img/quinta_img-removebg-preview.png" width="100" height="100" alt="Imagem 1">
              </div>

              <div class="col-sm-2 col-md-3 col-3 nav2">
                <img src="img/quinta_img-removebg-preview.png" width="100" height="100" alt="Imagem 1">
              </div>

              <div class="col-sm-2 col-md-3 col-3 nav3" >
                <img src="img/quinta_img-removebg-preview.png" width="100" height="100" alt="Imagem 1">
              </div>

              <div class="col-sm-2 col-md-3 col-3 nav4">
                <img src="img/quinta_img-removebg-preview.png" width="100" height="100" alt="Imagem 1">
              </div>

            </div>
          </section>   
        </div>
    
          <div class="container">
            <div class="row">
        
                <div class="  col-sm-8 col-md-8 col-10 hometext"> 
                    <section>
                      <h1 class="h1home">Bem Vindo</h1>
                       <p class="phome"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur neque, et aliquam necessitatibus fugit, voluptas facilis ducimus voluptates molestiae dolorem accusamus quo laudantium nemo expedita voluptatibus. Labore quia earum quae.</p>
                    </section>
                   
                  </div>
              <div class=" col-md-4 col-sm-4 col-10">
               
                 
                       <aside>
                        <img src="img/colher.png" width="400" height="235" alt="Quatro colheres com tempeiros">
                     </aside>  
              </div>
              
            </div>
           </div>
          </main>

          <?php include("footer.php") ?>
 
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>         
</body>
</html>
