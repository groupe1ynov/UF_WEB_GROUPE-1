<?php include 'function.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil | CV Click</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/accueil.css">
  <link rel="icon" type="image/png" href="img/logo2.png">
</head>


<body style="background-color:#17a2b8">
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo2.png" width="30" height="30" class="d-inline-block align-top mb-0 h1" alt="">
      CvClick
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="nav nav-pills">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <button type="button" class="btn btn-primary"><a class="text-white" href="cv.php">Les Cv</a></button>
        <li class="nav-item">
          <a class="nav-link" href="#apropos">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Nous contacter</a>
        </li>
</ul>
</div>
</nav>

<br>


*




<div class="border border-primary rounded" id="victor" >
  <h4 class="alert alert-primary text-center" >SEDAROS Victor-Emmanuel</h4>
  <div class="text-center">
      <div id="imgvictor" class="overlay-image rounded-circle">
          <a href="cv.php">
              <img src="img/cvimg1.jpg" id="imgvictor" class="rounded-circle" alt="Alt text" />
            <div class="normal rounded-circle">
             <div class="text rounded-circle"></div>
            </div>
            <div class="hover rounded-circle">
             <div class="text rounded-circle">Voir le CV</div>
            </div>
           </a>
        </div>
  </div>
    <div class="media-body">
      <h5 class="text-center mt-0">Mes intérets :</h5>
      <p><?php echo $interets[0]['description_i'] ?></p>
    </div>
</div>


<div class="border border-primary rounded" id="cyrille" >
  <h4 class="alert alert-primary text-center" >GENDI Cyrille</h4>
  <div class="text-center">
      <div id="imgcyrille" class="overlay-image rounded-circle">
          <a href="cv.php">
              <img src="img/cvimg2.jpg" id="imgcyrille" class="rounded-circle" alt="Cyrille" width="200px" height="200px">
            <div class="normal rounded-circle">
             <div class="text rounded-circle"></div>
            </div>
            <div class="hover rounded-circle">
             <div class="text rounded-circle">Voir le CV</div>
            </div>
           </a>
        </div>

  </div>
    <div class="media-body">
    <h5 class="text-center mt-0">Mes intérets :</h5>
    <p><?php echo $interets1[0]['description_i'] ?></p>
    </div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cv.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/code.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/ynov.jpg" class="d-block w-100" alt="...">
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
<br>
<br>
<br>
<br>
<br>
 <div class="border border-primary rounded" id="apropos" >
    <h4 class="alert alert-primary text-center" >À propos de nous</h4>
    <div class="media">
  <img class="mr-3" src="img/logon.png">
  <div class="media-body">
  <p>CvClick est un site très intuitif, dévellopé par 2 étudiants Ynoviens, ce site vous donne accès à nos CV personnalisés en ligne.</p>
  <p>Dévellopé pour vous, CvClick vous permettra en un clic d'acceder à notre parcours et à nos formations</p>
  </div>
</div>
</div>


<br>
<br>
<br>
<br>

<footer class="card text-white text-center bg-dark">
  <div class="card-footer text-muted">
    SEDAROS Victor-Emmanuel & GENDI Cyrille • Copyrights © 2019 • Site réalisé à but scolaire / PARIS Ynov Campus
    <a target="_blank" href="https://www.ynov-paris.com/ecole-informatique/" class="btn btn-primary">Visiter le site</a>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>