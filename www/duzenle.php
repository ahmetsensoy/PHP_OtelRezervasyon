<?php
session_start();
require_once 'baglan.php';
$kullaniciID = $_SESSION['ID'];
$kullanici = "select * from kisiler where id='$kullaniciID'";
$getir = $db->query($kullanici);
$kullanici = $getir->fetch(PDO::FETCH_ASSOC);
$adSoyad =$kullanici['adsoyad'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Düzenle</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="makok.css">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/carousel.js"></script>
    <link rel="stylesheet" href="css/duzenle.css">
</head>

<body>
<div class="formdiv">
    <form action="" method="post">
        <br> <label>Kullanıcı adı:</label>
        <input type="text" name="adSoyad" value="<?= $adSoyad  ?>" placeholder="Ad Soyad"><br><br>
        <input type="hidden" name="submit"value="1"><br>
        <button type="submit" class="btn btn-success ml-5 mr-0" >Güncelle</button>
        
        <?php
        if($kullaniciID !=26){
            echo '<a href="hesabisil.php"><button type="button" class="btn btn-danger ml-5 mr-0">Hesabı Sil</button></a>';
        }
        ?>
    </form>
    </div>   
    <?php
    if (isset($_POST['submit'])) {
        $kullaniciAdi = $_POST['adSoyad'];
        $guncelle = $db->prepare("UPDATE kisiler SET adsoyad=? where id=?");
        $guncelle ->execute(array($kullaniciAdi,$kullaniciID));
        
        if($guncelle){
       
            echo '<script>alert("Güncelleme Başarılı")</script>';
            echo '<a href="index.php"><button type="button" class="submit">Anasayfaya Dön</button></a>';
    
        }
        else{
            echo '<script>alert("Hata! Güncelleme Başarısız")</script>';
        }
    }
    ?>


</body>

</html>