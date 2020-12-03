<?php
session_start();
require_once 'baglan.php';
?>

 <?php
        
        $silinecek = $_GET['id'];
        $sil = $db->prepare('DELETE FROM rezervasyonlar WHERE id=?');
        $sil ->execute([$silinecek]);
        if($sil){
            echo '<script>alert("Rezervasyon Başarılı Bir Şekilde Silindi")</script>';
        }
        else{
            echo '<script>alert("Hata! Silme işlemi Başarısız")</script>';
        }
    
   ?>