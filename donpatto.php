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
    <!-- BBootstrap Icons via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Vila Don Patto</title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <header id="header_donpatto">
                <?php include("header.php") ?>
                <div class="titulo">
                    <h1>VILA DON PATTO</h1>
                    <h2>1988</h2>
                </div>
            </header>

            <!-- CARDS -->
            <section id="sobre" class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card mb-3" style="max-width: 640px;">
                            <div class="row g-8">
                                <div class="col-md-4">
                                    <img src="img/viladonpatto_img3.jpg" class="img-fluid rounded-start" alt="a">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Pratos Culinária Portuguesa</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card mb-3" style="max-width: 640px;">
                            <div class="row g-8">
                                <div class="col-md-4">
                                    <img src="img/viladonpatto-img2.jpg" class="img-fluid rounded-start" alt="a">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Pratos Culinária Italiana</h5>
                                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- SESSÃO -->
            <section id="menu" class="container mt-5 mb-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Ambiente" data-bs-toggle="tab" data-bs-target="Ambiente-pane" type="button" role="tab" aria-controls="Ambiente-pane" aria-selected="true">Ambiente</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cardapio" data-bs-toggle="tab" data-bs-target="#cardapio-pane" type="button" role="tab" aria-controls="cardapio-pane" aria-selected="false">Cardápio</button>
                    </li>
                </ul>
                <div class="tab-content" id="donpattoTabContent">
                    <div class="tab-pane fade show active" id="Ambiente-pane" role="tabpanel" aria-labelledby="Ambiente" tabindex="0">
                        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome Prato</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome Prato</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome Prato</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome Prato</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cardapio-pane" role="tabpanel" aria-labelledby="cardapio" tabindex="0"></div>
                </div>
            </section>

            <!-- LOCALIZAÇÃO -->
            <section class="container text-center mb-5" id="localizacao">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Conheça o don Patto
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Estamos te esperando!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Estrada do Vinho, KM 2,5 - Jardim Villaca, São Roque <br> SP, 18145-002</p>
                                <div style="width: 100%">
                                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Estrada%20do%20Vinho,%20KM%202,5%20-%20Jardim%20Villaca,%20S%C3%A3o%20Roque%20-%20SP,%2018145-002+(Vila%20Don%20Patto)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                    </iframe>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("footer.php") ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>