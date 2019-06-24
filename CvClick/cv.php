<?php include 'function.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nos CV | CV Click</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <div class="btn-group">
              <button type="button" class="btn btn-primary"><a class="text-white" href="cv.php">Les Cv</a></button>
              <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu">

                <?php
                  foreach($contactList as $key => $user){

                    ?>
                  
                  <button onclick="document.getElementById('cvimg').src='img/cvimg<?php echo $key + 1?>'" id="valeur<?php echo $key + 1?>" class="dropdown-item" data-value="<?php echo $key + 1?>">Cv <?php echo $key + 1?> - <?php echo $user['nom']. ' ' .$user['prenom'] ?></button>
              <?php
                  }
              ?>
              </div>
          </div>
            <li class="nav-item">
              <a class="nav-link" href="index.php#apropos">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Nous contacter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/phpmyadmin/">Config</a>
            </li>
    </ul>
    </div>
    </nav>







    <br>
    <div id="cv" class="rounded border-primary mb-3">
            <div class="rounded text-white bg-info mb-3" >
                <img id="cvimg" src="img/cvclick.png" class="rounded-circle">
                <br>

                <div  id="cvinfos" class="card border-dark bg-info text-white  mb-3" >
                        <div class="card-header text-center"> <span id="nom"></span> <span id="prenom"></span></div>
                        <div class="card-body">
                          <h2 class="text-center badge badge-dark text-wrap " style="width: 6rem; height: 1.3rem;">Contact :</h2>
                          
                          <p class="card-text"><ion-icon size="large" name="calendar"></ion-icon>  <span id="date"></span></p>
                          <p class="card-text"><ion-icon size="large" name="locate"></ion-icon>  <span  id="adresse"></span></p>
                          <p class="card-text"><ion-icon size="large" name="call"></ion-icon>  +33<span id="tel1"> </span></p>
                          <p class="card-text"><ion-icon size="large" name="mail-open"></ion-icon>  <a class="text-white" id="mailto" href="mailto:victorsedaros@ynov.com"></a></p>
                        </div>
                </div>

                <br>

                <div id="cvformation" class="card bg-light mb-3 text-dark">
                        <div class="card-header card-title text-center text-white bg-secondary">Formations</div>
                        <div class="card-body">
                                <?php
                                  foreach($formations as $key => $user1){
                                ?>
                                    <h6 class="card-title"><span class="badge badge-pill badge-primary"><?php echo $user1['date_f']?> </span> <?php echo $user1['lieu_f']?></h6>
                                    <p class="card-text"><?php echo $user1['description_f']?></p>
                                <?php
                                    }
                                ?>
                        </div>
                        <div class="card-header card-title text-center text-white bg-secondary">Expériences professionnelles</div>
                        <div class="card-body">
                                <?php
                                  foreach($experiences as $key => $user2){
                                ?>
                                    <h6 class="card-title"><span class="badge badge-pill badge-primary"><?php echo $user2['date_exp']?> </span> <?php echo $user2['lieu_exp']?></h6>
                                    <p class="card-text"><?php echo $user2['description_exp']?></p>
                                <?php
                                    }
                                ?>
                        </div>
                </div>

                <div id="cvskills" class="card text-white bg-secondary mb-3">
                        <div class="card-header text-center">Compétences</div>
                        <div class="card-body">
                            <ul id="ulskills">          
                                <?php
                                  foreach($competences as $key => $user3){
                                ?>
                                    <li id="competences"><?php echo $user3['description_c']?></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                </div>

                <div id="cvskills" class="card text-white bg-danger mb-3">
                        <div class="card-header text-center">Langues</div>
                        <div class="card-body">                            
                            <ul id="ulskills">
                                <?php
                                  foreach($langues as $key => $user4){
                                ?>
                                    <li id="langues"><?php echo $user4['description_l']?></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                </div>

                <div id="cvskills" class="card text-white bg-success mb-3">
                        <div class="card-header text-center">Intérêts</div>
                        <div class="card-body">
                          <p class="card-text" id="interets"></p>
                        </div>
                </div>
                <br>
            </div>
    </div>









    <footer class="card text-white text-center bg-dark">
        <div class="card-footer text-muted">
        SEDAROS Victor-Emmanuel & GENDI Cyrille • Copyrights © 2019 • Site réalisé à but scolaire / PARIS Ynov Campus
        <a target="_blank" href="https://www.ynov-paris.com/ecole-informatique/" class="btn btn-primary">Visiter le site</a>
        </div>
    </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-1/dist/ionicons.js"></script> 
  <script>
  $('.dropdown-item').click(function(){
    let id = $(this).attr('data-value');
    $.ajax({
      url: 'refreshcv.php',
      data: {id:id},
      type:'POST'
    }).done(function(data){
      var parse = $.parseJSON(data);
      console.log(parse);
      $('#nom').text(parse[0].nom);
      $('#prenom').text(parse[0].prenom);
      $('#date').text(parse[0].date);
      $('#adresse').text(parse[0].adresse);
      $('#tel1').text(parse[0].tel);
      $('#interets').text(parse[0].description_i);
      $('#mailto').html('<a class="text-white" id="mailto" href="mailto:'+ parse[0].mail +'"></a>');
      //$('#mailto').attr('href="mailto:'+ parse[0].mail +'"');
      $('#mailto').text(parse[0].mail);
    });
  });
  
  </script>
</body>
</html>