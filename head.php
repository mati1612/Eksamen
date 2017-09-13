<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FancyClothes.DK</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla|Lato|Oswald" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0dd4dd1c13.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<!-- Top søgebar og sprog, hardcoded -->
    <div class="container">
        <div class="row" id="top">
        <div id="icon" class="col-2 row">
            <img src="img/ikon.png" alt="Dansk flag"><p>Dansk</p><p>DKK</p>
        </div>
        <div id="search" class="col-3 row">
            <input type="text"><button type="button" class="btn btn-secondary">Søg</button>
        </div>
        </div>
        <div class="col" id="homeicon">
            <a href="#"><img src="img/homeicon.png" alt="Logo trøje"></a>
        </div>
    </div>
    <hr>

<!-- Navigation og indkøbskurv -->
    <div class="container">
        <div class="row" id="navi">
        <nav class="nav">
            <li class="nav-item active"><a href="#" class="nav-link">Forside</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Produkter</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Nyheder</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Handelsbetingelser</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Om os</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Log ind</a></li>
        </nav>
        <div id="kurv">
            <p>Din indkøbskurv er tom</p><i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </div>
        </div>
    </div>
    <hr>

<!-- Slideshow -->
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    </div>
    <hr>

<!-- Tagline/header -->
    <header class="container">
    <h1>FancyClothes.DK - tøj, kvalitet, simpelt!</h1>
    </header>
    <hr>

<!-- Aside + Main container start -->
    <div class="container">
    <div class="row">

<!-- Aside bar -->
    <aside class="col-2">
        <div class="col">
            <h5>Kategorier</h5>
            <ul>
                <li><a href="#">Jakker</a></li>
                <li><a href="#">Bukser</a></li>
                <li><a href="#">Skjorter</a></li>
                <li><a href="#">T-shirts og Tops</a></li>
                <li><a href="#">Strik</a></li>
            </ul>
        </div>
        <div class="col">
            <h5>Tilmeld nyhedsbrev</h5>
            <input type="text" placeholder="Navn">
            <input type="text" placeholder="E-mail">
            <button>Tilmeld</button>
        </div>
    </aside>