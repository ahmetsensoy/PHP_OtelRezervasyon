<?php
session_start();
require_once 'baglan.php';
$kullaniciID = $_SESSION['ID'];
$kullanici = "select * from kisiler where id='$kullaniciID'";
$getir = $db->query($kullanici);
$kullanici = $getir->fetch(PDO::FETCH_ASSOC);
$adSoyad = $kullanici['adsoyad'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rezervasyonlar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="makok.css">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/carousel.js"></script>
</head>

<body>

	<table class="table table-bordered">
	
		<?php
		if ((int) $_SESSION['ID'] == 26) { //admin giriş yaptıysa
			echo "<tr>
			<td>Ad Soyad </td>
			<td>Otel Adı </td>
			<td>Oda Türü </td>
			<td>Kişi Sayısı </td>
			<td>Giriş Tarihi </td>
			<td>Çıkış Tarihi </td>
			<td>Sil </td>
			</tr>";
			$verileriCek = $db->query('SELECT rezervasyonlar.id, rezervasyonlar.otelAdi,rezervasyonlar.odaTur,rezervasyonlar.kisiSayisi,rezervasyonlar.girisTarihi ,rezervasyonlar.cikisTarihi, kisiler.adsoyad FROM rezervasyonlar INNER JOIN kisiler ON rezervasyonlar.kisiID=kisiler.id ORDER BY rezervasyonlar.id DESC');
			$rezervasyonlar = $verileriCek->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rezervasyonlar as $rezervasyon) {
				$adSoyad  = $rezervasyon['adsoyad'];
				$otelAdi = $rezervasyon['otelAdi'];
				$odaTur = $rezervasyon['odaTur'];
				$kisiSayisi = $rezervasyon['kisiSayisi'];
				$girisTarihi = $rezervasyon['girisTarihi'];
				$cikisTarihi = $rezervasyon['cikisTarihi'];
				$ID = $rezervasyon['id'];
				
				echo "<tr>
						<td>$adSoyad</td>
						<td>$otelAdi</td>
						<td>$odaTur</td>
						<td>$kisiSayisi</td>
						<td>$girisTarihi</td>
						<td>$cikisTarihi</td>
						<td><a href='rezervasyonsil.php?id=$ID'><button type='button' class='btn btn-danger ml-5 mr-0'>Sil</button></a></td>
					</tr>
					";
			}
		} 
		else {
			echo 	"<tr>
			<td>Otel Adı </td>
			<td>Oda Türü </td>
			<td>Kişi Sayısı </td>
			<td>Giriş Tarihi </td>
			<td>Çıkış Tarihi </td>
			<td>Sil </td>
			</tr>";
			$verileriCek = $db->prepare('SELECT * FROM rezervasyonlar WHERE kisiID=?');
			$verileriCek->execute([$kullaniciID]);
			$rezervasyonlar = $verileriCek->fetchAll();

			foreach ($rezervasyonlar as $rezervasyon) {
				$otelAdi = $rezervasyon['otelAdi'];
				$odaTur = $rezervasyon['odaTur'];
				$kisiSayisi = $rezervasyon['kisiSayisi'];
				$girisTarihi = $rezervasyon['girisTarihi'];
				$cikisTarihi = $rezervasyon['cikisTarihi'];
				$ID = $rezervasyon['id'];


				echo "<tr>
						<td>$otelAdi</td>
						<td>$odaTur</td>
						<td>$kisiSayisi</td>
						<td>$girisTarihi</td>
						<td>$cikisTarihi</td>
						<td><a href='rezervasyonsil.php?id=$ID'><button type='button' class='btn btn-danger ml-5 mr-0'>Sil</button></a></td>
					</tr>
					";
			}
		}



		?>



	</table>

</body>

</html>