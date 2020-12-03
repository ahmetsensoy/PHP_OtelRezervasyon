<?php
session_start();
require_once 'baglan.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Rezervasyon Formu</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/makok.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carousel.js"></script>
  <script src="js/lightbox.min.js"></script>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <style>
    #odaTurleri {
      width: 150px;
    }

    #oteller {
      width: 250px;
    }
  </style>
</head>


<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/rez.css">

<title>Hello, world!</title>
</head>

<body>
  <div class="container-fluid bg-light border-bottom border-secondary sticky-top shadow-lg">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">
          <img class="img-fluid sensoyturızm" src="images/sensoyturızm.png" alt="logo" class="ta">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav ">
          <ul class="navbar-nav">
            <li class="nav-item r"><a class="nav-link" href="index.php">Anasayfa</a></li>
            <li class="nav-item"><a class="nav-link" href="hakkimizda.html">Hakkımızda</a></li>
            <li class="nav-item"><a class="nav-link" href="hizmetlerimiz.html">Hizmetlerimiz</a></li>
            <li class="nav-item"><a class="nav-link" href="galeri.html">Galeri</a></li>
            <li class="nav-item"><a class="nav-link" href="rezervasyon.php">Rezervasyon</a></li>
            <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
          </ul>
        </div>

      </nav>
    </div>
  </div>
  <div class="container-fluid" style="background: url(images/a1.jpg); background-size: cover;
    height: 250px;">
    <div class="container" style="padding-top: 100px;">

      <h1 class="text-white h2">REZERVASYON</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(255,255,255,0.25);">
          <li class="breadcrumb-item"><a class="text-success" href="index.php">Anasayfa</a></li>
          <li class="breadcrumb-item active">Rezervasyon Formu</li>
        </ol>
      </nav>

    </div>
  </div>
  <?php

  if (isset($_SESSION['ID'])) {
    if((int)$_SESSION['ID']==26){
      echo '<a href="rezervasyonlistele.php"><button type="button" class="btn btn-danger ml-5 mr-0">Tüm Rezervasyonları Listele</button></a>';
    }
    else{
      echo '<a href="rezervasyonlistele.php"><button type="button" class="btn btn-danger ml-5 mr-0">Rezervasyonlarımı Listele</button></a>';
    }
   
  }
  ?>
  <form action="" method="post" class="elegant-aero">
    <h1>Rezervasyon Formu</h1>

    <label>
      <span>Otel Adı : </span>
      <select name="oteller" id="oteller" size="1">
        <option value="Antalya">Antalya - Otel</option>
        <option value="Mugla">Muğla - Otel</option>
        <option value="Cesme">Çeşme - Otel</option>
        <option value="Bodrum">Bodrum - Otel</option>
        <option value="Izmır">İzmir - Otel</option>
        <option value="Almanya">Almanya - Otel</option>
        <option value="Ispanya">İspanya - Otel</option>
        <option value="Italya">İtalya - Otel</option>
        <option value="Fransa">Fransa - Otel</option>
      </select>
    </label>

    <label>
      <span>Oda Türü : </span>
      <select name="odaTurleri" id="odaTurleri">
        <option value="SadeceOda">Sadece Oda</option>
        <option value="OdaKahvalti">Oda + Kahvaltı</option>
        <option value="Yarım">Yarım Pansiyon</option>
        <option value="Tam">Tam Pansiyon</option>
        <option value="Plus">Herşey Dahil</option>
      </select>
    </label>
    <label>
      <span>Kalacak Kişi Sayısı :</span>
      <input type="number" value=1 min="1" name="misafirSayisi" placeholder="" required />
    </label>

    <label>
      <span>Giriş Tarihi :</span>
      <input type="date" name="girisT" />
    </label>

    <label>
      <span>Çıkış Tarihi :</span>
      <input type="date" name="cikisT" />
    </label>
    <input type="hidden" name="submit" value="1"><br>
    <input type="submit" class="button" value="Rezervasyon Tamamla" />

  </form>
  <div class="container-fluid bg-secondary py-3 text-light mt-3">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <strong>HAKKIMIZDA</strong><br><br>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis incidunt
            quia aliquid, saepe quibusdam ad nemo deleniti accusantium ducimus autem, quis, tempora aperiam
            eos reprehenderit poss.</p>
        </div>
        <div class="col-12 col-md-6 col-lg-3  mb-3">
          <strong>BİZE ULAŞIN</strong><br><br>

          <img src="images/yer-1.png" alt="adres">
          <span>Merkez Mh. Küçükköy Yolu Cd. No:23 / 2 Gaziosmanpaşa / İstanbul</span>


          <img src="images/tel-1.png" alt="telefon">
          <span>+90 555 088 1999</span><br>
          <img src="images/email-1.png" alt="email">
          <span>info@sensoyturizm.com</span>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
          <strong>MENÜ</strong><br><br>
          <ul>
            <li class="nav-item"><a class="nav-link text-light" href="#">Anasayfa</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Kurumsal</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Reklam</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Banka Bilgileri</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">Sıkça Sorulan Sorular</a></li>
            <li class="nav-item"><a class="nav-link text-light" href="#">İletişim</a></li>
          </ul>
        </div>
      
      </div>
    </div>
  </div>

  <?php

  if (isset($_POST['odaTurleri'])) {
    $oda = $_POST['baslangicT'];

    echo $oda;
  }


    if (isset($_POST['submit'])) {

   
      $kisiID_string = $_SESSION['ID'];
      $kisiID = (int) $kisiID_string;
      $otelAdi = $_POST["oteller"];
      $girisTarihi = $_POST["girisT"];
      $cikisTarihi = $_POST["cikisT"];
      $kisiSayisi = $_POST["misafirSayisi"];
      $odaTur = $_POST["odaTurleri"];
      $ekle = $db->prepare("INSERT INTO rezervasyonlar SET kisiID=?, otelAdi=?, girisTarihi=?,cikisTarihi=?,kisiSayisi=?,odaTur=?");
      $ekle->execute(array($kisiID, $otelAdi, $girisTarihi, $cikisTarihi, $kisiSayisi, $odaTur));

      if ($ekle) {

        echo '<script>alert("Rezervasyonunuz Eklendi")</script>';
      } else {
        echo '<script>alert("Hata! Kayıt Başarısız")</script>';
      
    }
  

  }

  ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>