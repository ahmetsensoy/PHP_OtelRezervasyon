<?php
session_start();
require_once 'baglan.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giris.css">
    <title>Giriş</title>
</head>

<body>
    <div class="kayıtdivi" >  
    <form action="" method="post">
    <br><br>
       <label class="label"> E-mail </label> 
       <br>
 <input type="email" name="email" minlength="10" maxlength="30" required
                placeholder="Lütfen e-posta adresinizi giriniz!">
        <br><br>
        <label class="label"> Şifre </label> 
        <br>
        <input type="password" name="sifre" minlength="3" maxlength="30" required
                placeholder="Lütfen şifrenizi giriniz!"><br>
        <input type="hidden" name="submit" value="1"><br>
        <button type="submit" class="submit">Giriş Yap</button>
    </form>
    <?php if (isset($hata)) : ?>
            <?php echo $hata; ?>
    
    <?php endif; ?>
</div>

    <?php
    if (isset($_POST['submit'])) {
        $kullaniciAdi = $_POST['email'];
        $sifre = $_POST['sifre'];
        if (!$kullaniciAdi || !$sifre) {
            $hata = 'Lütfen eposta ve şifrenizi eksiksiz bir şekilde giriniz.';
        } else {
            $giris = "select * from kisiler where eposta='$kullaniciAdi' and parola='$sifre'";
            $getir = $db->query($giris);
            $kullanici = $getir->fetch(PDO::FETCH_ASSOC);
            if ($kullanici != null) {

                $_SESSION['ID'] = $kullanici['id'];
                $_SESSION['kullanici_adi'] = $kullanici['adsoyad'];
                header('Location:index.php');
            } else {
                $hata = 'Girilen e-posta ve şifre yanlış.';
            }
        }
    }
    ?>
    
</body>

</html>