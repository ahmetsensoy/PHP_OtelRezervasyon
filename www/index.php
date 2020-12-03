<?php
session_start();
ob_start();
require_once 'baglan.php';
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Şensoy Turizm </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="css/anasf.css">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/carousel.js"></script>

</head>

<body>


<div class="container-fluid bg-light border-bottom border-secondary sticky-top shadow-lg">
		<div class="">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">
					<img class="img-fluid sensoyturızm" src="images/sensoyturızm.png" alt="logo">
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
				<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Ara..." aria-label="Search">
					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Ara</button>
				</form> -->
				<?php
				if (isset($_SESSION['kullanici_adi'])) {
					echo $_SESSION['kullanici_adi'];
					echo '<a href="cikis.php"><button type="button" class="btn btn-outline-info ml-5 mr-0">ÇIKIŞ</button></a>';
					echo '<a href="duzenle.php"><button type="button" class="btn btn-outline-info ml-5 mr-0">DUZENLE</button></a>';
				} else {
					echo '<a href="kayit.php"><button type="button" class="btn btn-outline-info ml-5 mr-0">KAYIT</button></a>';
					echo '<a href="giris.php"><button type="button" class="btn btn-outline-info ml-3 mr-3">GİRİŞ</button></a>';
				}

				?>

			</nav>
		</div>
	</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/banner1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/banner2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/banner3.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/banner4.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/sensoyturızm.png" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="container mt-5">
		<h1 class="h2 text-center">HİZMETLERİMİZ</h1><br>
		<p class="text-center lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, quam? A ratione
			esse iure tenetur sit magnam eos illo quaerat sint ipsam minus, voluptate, tempore culpa. Natus, recusandae!
			Fugit, provident!</p>
		<div class="row">
			<div class="col-12 col-md-4 mb-2 ">
				<div class="border rounded p-2">
					<img src="https://picsum.photos/400/300" class="img-fluid w-100" alt="oteller">
					<h2 class="h4 p-2 text-center text-warning ">Yurt İçi ve Yurt Dışı Oteller</h2>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus
						deserunt voluptates ad, voluptatibus cupiditate ipsum voluptate molestiae iste vitae.</p>
					<a class="btn btn-warning" href="#">Devamı</a>
				</div>
			</div>

			<div class="col-12 col-md-4  mb-2 ">
				<div class="border rounded p-2">
					<img src="https://picsum.photos/400/300" class="img-fluid w-100" alt="oteller">
					<h2 class="h4 p-2 text-center text-warning">Yurt İçi ve Yurt Dışı Oteller</h2>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus
						deserunt voluptates ad, voluptatibus cupiditate ipsum voluptate molestiae iste vitae.</p>
					<a class="btn btn-warning" href="#">Devamı</a>
				</div>
			</div>


			<div class="col-12 col-md-4  mb-2">
				<div class="border rounded p-2">
					<img src="https://picsum.photos/400/300" class="img-fluid w-100" alt="oteller">
					<h2 class="h4 p-2 text-center text-warning">Yurt İçi ve Yurt Dışı Oteller</h2>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus
						deserunt voluptates ad, voluptatibus cupiditate ipsum voluptate molestiae iste vitae.</p>
					<a class="btn btn-warning" href="#">Devamı</a>
				</div>
			</div>


		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="container  p-3 mt-3  mr-0 yerdivs yerdivs1">
					<div class="container">
						<strong class="display-4 text-center d-block pb-3 yazi">AVRUPAYI KEŞFET!</strong>
						<br>
						<p class="text-center">Mimari, gurme lezzetler, moda, eğlence ve daha fazlası... Her biri
							sunduğu
							güzelliklerle ikonlaşmış Avrupa şehirlerinde, keşfedeceğin çok şey var!
							<br><br>
							<a class="btn btn-dark px-4 py-2 kesfet" href="yerab.html">KEŞFET!</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="container  p-3 mt-3 ml-0  yerdivs  yerdivs2">
					<div class="container">
						<strong class="display-4 text-center d-block pb-3 yazi">TÜRKİYEDE TERCİH EDİLEN YERLER!</strong>
						<p class="text-center">Yerli ve yabancı birçok turist genellikle kısa süreli de olsa belirli
							turistik alanları ziyaret etmektedir. Bu alanlar gerek tarihi yapısı gerekse doğal güzelliği
							ile birlikte oldukça ön plana çıkmaktadır.
							<br><br>
							<a class="btn btn-dark px-4 py-2 git" href="yertr.html">GİT!</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<h3 class="text-center h2 mb-3">Hakkımızda</h3>
		<div class="row">
			<div class="col-12 col-md-3 mb-3">
				<img src="http://picsum.photos/300/300" class="rounded img-fluid w-100" alt="hakkımızda">
			</div>
			<div class="col-12 col-md-9">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi a accusamus blanditiis quam placeat
					quis in veniam nobis inventore reiciendis culpa neque nulla, voluptatem, quod sed officia ratione
					vitae tempora quidem consequuntur recusandae dicta nisi! Sit perferendis omnis vitae voluptatibus
					est incidunt, ab itaque perspiciatis quod reprehenderit recusandae facere animi labore, cupiditate
					eaque asperiores voluptatum tempore doloremque beatae porro in excepturi delectus ducimus quas.
					Saepe expedita ipsa ducimus excepturi a natus cum ipsum asperiores, doloribus eius nobis iste fugit
					repellendus quos rem fugiat quod voluptatibus quidem deserunt architecto hic id omnis autem?
					Officiis suscipit, nostrum reprehenderit saepe. Voluptates, molestias, rerum.</p>
				<a class="btn btn-warning" href="#">Devamı</a>

			</div>
		</div>

	</div>
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
</body>

</html>