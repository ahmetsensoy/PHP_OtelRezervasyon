<?php
require_once 'baglan.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kayit.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Kayıt Ol</title>
</head>

<body>
    <div class="kayıtdivi">
        <br>
        <form name="kayıtolma" method="post"  class="kayit" action="">
            <label>İSİM : </label><br>
            <input type="text" name="kullanici" minlength="2" maxlength="30"
                placeholder="Lütfen adınızı ve soyadınızı giriniz!"><br><br>
            <label>E-POSTA : </label><br>
            <input type="email" name="email" minlength="10" maxlength="30" required
                placeholder="Lütfen e-posta adresinizi giriniz!"><br><br>
            <label>ŞİFRE : </label><br>
            <input type="password" name="sifre" minlength="3" maxlength="30" required
                placeholder="Lütfen şifrenizi giriniz!"><br><br>
            <input type="submit" name="gonder" value="Kayıt Ol" class="submit"><br>
            <input type="reset" name="temizle" value="Temizle"class="submit"><br>
            <img src="images/ok.png" alt="resim yok" class="ok">
        </form>
    </div>
    <?php
        /*
        Veritabanı bağlantımızı yapıyoruz
        */

        if (isset($_POST["kullanici"]) && isset($_POST["sifre"]))
        {
        $kaydedilecekAd = $_POST["kullanici"];
        $kaydedilecekEmail= $_POST["email"];
        $kaydedilecekSifre = $_POST["sifre"];
        $ekle = $db->prepare("INSERT INTO kisiler SET adsoyad=?, eposta=?, parola=?");
        $ekle ->execute(array($kaydedilecekAd,$kaydedilecekEmail,$kaydedilecekSifre));
        
        if($ekle){
       
            echo '<script>alert("Kayıt Başarılı")</script>';
            echo '<a href="index.php"><button type="button" class="submit">Anasayfaya Dön</button></a>';
    
        }
        else{
            echo '<script>alert("Hata! Kayıt Başarısız")</script>';
        }
    
        }
   ?>
</body>

</html>