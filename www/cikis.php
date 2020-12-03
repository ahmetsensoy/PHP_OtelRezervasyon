<?php
session_start();
session_destroy();
echo "Çıkış yapıldı";
header('Location:index.php');
?>
