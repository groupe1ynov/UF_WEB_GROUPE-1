<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contactez-nous | CV Click</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="icon" type="image/png" href="img/logo2.png">
</head>



<body>
  
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
          <button type="button" class="btn btn-primary"><a class="text-white" href="cv.html">Les Cv</a></button>
        <li class="nav-item">
          <a class="nav-link" href="index.php#apropos">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Nous contacter</a>
        </li>
</ul>
</div>
</nav>

<br>
<blockquote class="blockquote text-center">
    <p class="mb-0">Contact</p>
    <footer class="blockquote-footer">Laissez-nous un <cite title="Source Title">Message</cite></footer>
</blockquote>
<br>

<div class="card text-white bg-info mb-3" id=contact>
<div class="text-center card-header">Nous Contacter</div>
<div id="formulaire">
  <br>
<form name="contactform" method="post" action="send_contact.php">

  <div id="personne" class="text-center form-row">
        <div class="col-md-6 mb-3">
        <label>Personne à contacter :</label>
          <select class="custom-select" required>
            <option value="">Selectionner la personne à contacter</option>
            <option value="1">SEDAROS Victor-Emmanuel</option>
            <option value="2">GENDI Cyrille</option>
          </select>
        </div>
  </div>

  <div id="tel" class="text-center col-md-4 mb-3">
  <label>N° tel : </label>
      <div class="input-group-prepend">
      <span class="input-group-text">+33</span>
      <input for="telephone"type="text" class="form-control" placeholder="Numéro de Telephone">
      </div>
  </div>

  <div class="form-row">
    <div class="text-center col-md-4 mb-3">
      <label>Prénom : </label>
      <input for="first_name" type="text" class="form-control" placeholder="Votre prénom" required>
    </div>
    <div class="text-center col-md-4 mb-3">
      <label> Nom : </label>
      <input for="last_name" type="text" class="form-control" placeholder="Votre nom" required>
    </div>
    <div class="text-center col-md-4 mb-3">
      <label>Adresse mail :</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><i style="font-size:24px" class="fa">&#xf003;</i></span>
        </div>
        <input for="email" type="email" class="form-control" placeholder="Votre@Mail.com" required>
      </div>
    </div>

  </div>
  <br>
  <div class="input-group">
      <div class="input-group-prepend">
      <span class="input-group-text">Votre message :</span>
      </div>
  <textarea for="comments" class="form-control" aria-label="With textarea"></textarea>
  </div>
  <br>
  <div id="envoyer">
    <button class="btn btn-primary" type="submit" value="submit"><a class="text-white" href="contact.php">Envoyer</a></button>
  </div>
  <br>
</form>
</div> 
</div>





<div class="card text-white bg-info mb-3" id="map">
  <div class="text-center card-header">Notre Ecole : <a class="text-dark" target="_blank" href="https://www.ynov-paris.com">YNOV PARIS</a></div>
  <br>
  <div class="card-body" id="mappy">
    <div style="overflow:hidden;width: 300px;position: relative;"><iframe width="300" height="250" src="https://maps.google.com/maps?width=300&amp;height=250&amp;hl=en&amp;q=12%20rue%20anatole%20france+(Titre)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
  </div>
  <br>
  <br>
</div>





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




<footer class="card text-white text-center bg-dark">
  <div class="card-footer text-muted">
    SEDAROS Victor-Emmanuel & GENDI Cyrille • Copyrights © 2019 • Site réalisé à but scolaire / PARIS Ynov Campus
    <a target="_blank" href="https://www.ynov-paris.com/ecole-informatique/" class="btn btn-primary">Visiter le site</a>
  </div>
</footer>
</body>
</html>