<?php
session_start();
require_once 'baglan.php';
?>
!
 <?php
        
        $kullaniciID = $_SESSION['ID'];
        echo $kullaniciID;
        $sil = $db->prepare('DELETE FROM kisiler WHERE id=?');
        $sil ->execute([$kullaniciID]);
        echo $kullaniciID;
        if($sil){
            session_destroy();
            header('Location:index.php');
            echo '<script>alert("Hesabınız Başarılı Bir Şekilde Silindi")</script>';
         
        }
        else{
            echo '<script>alert("Hata! Silme işlemi Başarısız")</script>';
        }
    
   ?>