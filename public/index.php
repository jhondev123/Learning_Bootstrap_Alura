<?php
$categorias = [
  "camisetas",
  "calças",
  "tenis",
  "categoria4",
  "categoria5",
  "categoria6",
];
$produtos = [
  'Nike Airmax',
  'Camiseta do vasco',
  'calça jogger',
  'Cueca do kalvin klein',
  'Boné da lacosta',
  'meia padrão',
];

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Aprendendo bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Cabeçalho-->
<nav class="navbar navbar-expand-md bg-black navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1 class="m-0"><img class="d-block" src="img/logo-meteora.png" alt="Logo da loja"></h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lojas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Novidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promoção</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-0

" type="search" placeholder="Digite um produto" aria-label="Search">
                <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<!-- Carrousel de imagens da loja -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/Mobile/banner1-mobile.png" class="img-fluid d-md-none d-xl-none">
            <img src="img/Tablet/banner1-tablet.png" class="img-fluid d-none d-md-block d-xl-none">
            <img src="img/Desktop/banner1-desktop.png" alt="" class="img-fluid d-none d-xl-block w-100">
        </div>
        <div class="carousel-item">

            <img src="img/Mobile/banner2-mobile.png" class="img-fluid d-md-none d-xl-none">
            <img src="img/Tablet/banner2-tablet.png" class="img-fluid d-none d-md-block d-xl-none">
            <img src="img/Desktop/banner2-desktop.png" alt="" class="img-fluid d-none d-xl-block">

            <div class="carousel-caption d-none d-md-block">
                <h5 class="fs-1">COLEÇÃO ATEMPORAL</h5>
                <p class="fs-4">Estilo e qualidade para durar.</p>
            </div>
        </div>
        <div class="carousel-item">

            <img src="img/Mobile/banner3-mobile.png" class="img-fluid d-md-none d-xl-none">
            <img src="img/Tablet/banner3-tablet.png" class="img-fluid d-none d-md-block d-xl-none">
            <img src="img/Desktop/banner3-desktop.png" alt="" class="img-fluid d-none d-xl-block">

            <div class="carousel-caption d-none d-md-block">
                <h5 class="fs-1">COLEÇÃO ATEMPORAL</h5>
                <p class="fs-4">Alto impacto visual, baixo impacto ambiental!</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- GRID CONTAINER NO BOOTSTRAP-->
<h2 class="text-center mt-3 mb-3">Busque por categoria</h2>
<div class="container row mx-auto g-4">
<?php foreach ($categorias as $categoria): ?>
    <div class="col-6 col-md-4 col-xxl-2">
        <div class="card bg-black ">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
            <div class="card-header ">
                <p class="text-center text-light "><?= $categoria ?></p>
            </div>
        </div>
    </div>
<?php endforeach;?>
    </div>

<!-- GRID CONTAINER NO BOOTSTRAP-->
<h2 class="text-center mt-3 mb-3">Produtos que estão bombando</h2>
<div class="container row mx-auto g-4">
    <?php foreach($produtos as $produto): ?>
    <div class="col-12 col-md-6 col col-xl-4">
        <div class="card ">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
            <div class="card-body">
                <h5 class="card-title text-center"><?= $produto?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p>R$ 100,00</p>
                <a href="#" class="btn btn-produto text-light">Ver mais</a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>

<!-- FLEXBOX NO BOOTSTRAP -->
<section class="pb-4 bg-black">
    <h2 class="my-3 text-center text-light">Conheça todas as nossas facilidades</h2>

    <div class="d-flex align-items-center flex-column gap-3 flex-lg-row py-3 justify-content-lg-center">
    <div class="sizing d-flex ">
        <div><i class="bi bi-x-diamond fs-1 me-3"></i></div>
        <div>
            <div class="fs-5">PAGUE PELO PIX</div>
            <div class="text">Ganhe 5% off em pagamentos via PIX</div>
        </div>
    </div>
    <div class="sizing d-flex ">
        <div><i class="bi bi-arrow-repeat fs-1 me-3"></i></div>
        <div>
            <div class="fs-5">TROCA GRÁTIS</div>
            <div class="text">Fique livre para trocar em até 30 dias</div>
        </div>
    </div>
    <div class="sizing d-flex ">
        <div><i class="bi bi-flower1 fs-1 me-3"></i></div>
        <div>
            <div class="fs-5">SUSTENTABILIDADE</div>
            <div class="text">Moda responsável que respeita o meio ambiente</div>
            </div>
    </div>
    </div>

</section>

<!-- Estilizando formulário -->
<div class="d-flex justify-content-center py-5">
<form class="border border-secondary m-3 p-3 text-center" method="post">
    <h5>Quer receber nossas novidades, promoções exclusivas e 10% OFF na primeira compra?
        Cadastre-se!</h5>
    <div class="input-group my-3">
        <input type="email" class="form-control border border-secondary rounded-0" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail" aria-describedby="button-addon2" />
        <button type="button" id="button-addon2" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>

<footer class="text-center bg-black">
    <p class="py-3 text-light">2023 <i class="bi bi-c-circle"></i> Projeto desenvolvido por Jhonattan Curtarelli em conjunto com a Alura</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>