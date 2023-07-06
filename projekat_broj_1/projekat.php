<?php
    date_default_timezone_set('Europe/Belgrade');
    $currentDate = date("d-m-Y h:i:sa");

    $images = ["beach.jpg", "beach2.jpg", "ocean.jpg", "ocean2.jpg", 
    "ocean3.jpg", "peace.jpg", "sea.jpg", "sea3.jpg", "sea5.jpg", "wave.jpg"];

    // Odabrane slike koje zelimo da prikazemo
    $odabraneSlike = [];

    // Funkcija koja proverava da li se zadati element nalazi u nizu //
    function existInArray($elementToFind, $arrayToLook){
      for($i = 0; $i < count($arrayToLook); $i++){
        if($arrayToLook[$i] == $elementToFind){
          return true;
        }
      }
      return false;
    }

    // Sve dok ne nadjemo 3 odabrane slike, proveravamo da nemamo duplikat //
    while(count($odabraneSlike) < 3){
      $randValue = rand(0, count($images) - 1);
      $result = existInArray($images[$randValue], $odabraneSlike);
      if($result == false){
        array_push($odabraneSlike, $images[$randValue]);
      }
    }

    function PreuzmiCitat($fileName){
      // $linije je niz stringova gde je svaki element ovog niza zapravo jedna linija fajla
      $linije = file(__DIR__ . $fileName);
      // Predstavlja poziciju elementa iz niza koji sadrzi linije naseg fajla
      $index = rand(0, count($linije) - 1);
      // Na parnim pozicijama se nalaze citati, a na neparnim autori
      // Ako smo dobili paran broj, znaci da imamo citat, fali samo autor
      // Autor se nalazi na liniji ispod 
      if($index % 2 == 0) {
        return $linije[$index] . "<br>" . $linije[$index + 1];
      }
      else {
        return $linije[$index - 1] . "<br>" . $linije[$index];
      }
    }

    $nasCitat = "";

    if(isset($_GET['fileToRead']) && $_GET['fileToRead'] == 'Posao') {
      $nasCitat = PreuzmiCitat("/posao.txt");
    }
    else if(isset($_GET['fileToRead']) && $_GET['fileToRead'] == 'Zdravlje'){
      $nasCitat = PreuzmiCitat("/zdravlje.txt");
    }
    else if(isset($_GET['fileToRead']) && $_GET['fileToRead'] == 'Ljubav'){
      $nasCitat = PreuzmiCitat("/ljubav.txt");
    }
    else if(isset($_GET['fileToRead']) && $_GET['fileToRead'] == 'Motivacija'){
      $nasCitat = PreuzmiCitat("/motivacija.txt");
    }
    
    
    $linijeFajla = file($fileName);
    $brojLinija = count($linijeFajla);
    $randomCitat = rand(0, $brojLinija - 1);
    $odabraniCitat = $linijeFajla[$randomCitat];
    

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Projekat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style_projekat.css">
  </head>
  <body>
    <header>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/<?=$odabraneSlike[0]?>" alt="sea">
            <div class="carousel-caption d-none d-md-block">
              <h5>Amor omnia vincit</h5>
              <p>Ljubav sve pobedjuje</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/<?=$odabraneSlike[1]?>" alt="wave">
            <div class="carousel-caption d-none d-md-block">
              <h5>Spes est ultima est</h5>
              <p>Nada je poslednja koja umire</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/<?=$odabraneSlike[2]?>" alt="beach">
            <div class="carousel-caption d-none d-md-block">
              <h5>Amor gignit amorem</h5>
              <p>Ljubav radja ljubav</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
      </div>
    </header>   
      <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="?fileToRead=Posao">Posao</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fileToRead=Zdravlje">Zdravlje</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fileToRead=Ljubav">Ljubav</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?fileToRead=Motivacija">Motivacija</a>
          </li>
        </ul>
      </nav>
    <section>
      <p>
        <?=$nasCitat?>
      </p>
    </section>
    <footer>
      <div>
        <p>
          <?=$currentDate?>
        </p>
      </div>
    </footer>
  </body>
</html>