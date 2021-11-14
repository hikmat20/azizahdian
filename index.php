<?php require_once 'config/connection.php'; ?>
<!DOCTYPE html>
<html style="height:100%">

<head>
	<title>Wedding Teny &mdash; Bahrudin </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Wedding Teny &mdash; Bahrudin </title>
	<meta property="og:title" content="The Wedding of Teny & Bahrudin" />
	<meta property="og:image" content="photos/cover2.jpg" />
	<meta property="og:url" content="http://tenybahrudin.nikahalal.com" />
	<meta property="og:site_name" content="15 Juli 2021 -- The Wedding of Teny & Bahrudin" />
	<meta property="og:description" content="15 Juli 2021" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="images/icon-nikahalal.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&amp;display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Parisienne&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/modified.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	<style>
		body {
			background-color: rgb(255 250 236);
		}

		@font-face {
			font-family: AksaraJawa;
			src: url(assets/fonts/AmellindaWeddings.otf);
		}
	</style>

</head>

<body>
	<audio loop preload="auto" id="myAudio">
		<source src="medias/kebo-giro.mp3">
	</audio>

	<a onclick="playAudio()" type="button" id="un-mute" class="float"><img src="images/mute.png" width="30px;"></a>
	<a onclick="pauseAudio()" type="button" id="mute" class="float"><img src="images/nomute.png" width="30px;"></a>

	<div class="modal fade right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true" style="overflow: hidden;" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
			<div class="modal-content-full-width modal-content ">
				<div id="fh5co-header2">
					<div id="overlay_popup" style="text-align:center; color:white;">
						<span style="color:white;font-family:Playfair, serif;display:block;font-size:24px;margin-bottom:0px;letter-spacing:2px;margin-top:50px;">
							The Wedding of
						</span>
						<span style="color:white;font-family: AksaraJawa;display:block;font-size:40px;margin-bottom:0px;letter-spacing:-1px;">
							Teny & Bahrudin
						</span>

						<?php if (@$_GET['to'] != '') : ?>
							<div style="color:#3d2505;font-family: Lora, serif;margin-top:30px;">
								<span style="color:white;font-family: Montserrat, sans-serif;display:block;font-size:14px;margin-bottom:0px;letter-spacing:2px;">
									Dear Mr/Mrs/Ms
								</span>

								<p style="color: #ffffff; font-size:25px; font-weight:bold; padding-bottom:0px; border-radius:0px; text-align: center" id="write"><?= @$_GET['to']; ?></p>
								<p style="color:white;font-family: Montserrat, sans-serif;display:block;font-size:14px;margin-bottom:0px;letter-spacing:2px;">
									You are invited to our wedding
								</p>
							</div>
						<?php endif; ?>
						<button type="button" class="btn" data-dismiss="modal" onclick="playAudio()" style="background-color:#3d2505;color:white;margin-top:0px;">❤ OPEN INVITATION</button>
						<div style="color:white;font-family: Lora, serif;margin-top:50px;bottom:10px;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fh5co-loader"></div>

	<div id="pages">
		<!-- NAVIGATION -->
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="#"><strong></strong></a></div>
					</div>
				</div>

			</div>
		</nav>

		<!-- HEADER -->
		<header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1 class="animated growIn slower" data-id="2" style="font-family:Playfair, serif; color:#ffffff">The Wedding of</h1>
								<h1 style="color:white;font-family: AksaraJawa;display:block;font-size:40px;margin-bottom:0px;letter-spacing:-1px;">
									Teny &amp; Bahrudin</h1>
								<br>
								<br>

								<br>
								<br>
								<p>
									<a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=NTc4YmtnZ2pqcnNkbm5ubjY5bDkyNzNyaWggbzRzZzNpbGd0aGpoOWdoY3B1NmR1ZGZmNHNAZw&tmsrc=o4sg3ilgthjh9ghcpu6dudff4s%40group.calendar.google.com" class="btn btn-default btn-sm" style="color:#3d2505;" target="blank">Save
										the date</a>
								</p>
								<br>
								<br>
								<div>
									<marquee align="center" direction="up" height="50"> <span align="center" style="color:white;font-family: Calibri;display:block;font-size:25px;margin-bottom:0px;letter-spacing:-1px;">
											<blink>Swipe Up ↑ </blink>
										</span></marquee>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- COUPLE -->
		<div id="fh5co-couple" class="fh5co-bg" style=" background-image:url(photos/banner1.jpg);background-repeat: no-repeat;background-size: cover; background-position: left top;">
			<div class=" container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2 style="color:white;font-family:AksaraJawa;display:block;font-size:32px;">
							Assalamu'alaikum Warahmatullahi Wabarakatuh</h2>
						<p style="color:#ffffff;">Dengan menyebut nama Allah Subhanahu Wa Ta'ala yang Maha Pengasih dan
							Maha Penyayang. Kami mengundang Anda untuk menghadiri pernikahan putra-putri kami</p>
					</div>
				</div>
				<div class="couple-wrap animate-box">
					<div class="couple-half">
						<div class="groom">
							<img src="photos/cewe.png" alt="groom" class="img-responsive">
						</div>
						<div class="desc-groom">
							<h3 style="color:white;font-family:AksaraJawa;display:block;font-size:30px;">
								Mempelai Wanita</h3>
							<h3 style="color:white;display:block;font-size:30px;">
								Teny Yustian</h3>
							<i class="fa fa-instagram" style="color:#fff"></i>
							<a href="https://www.instagram.com/tennytian/" style="color:#ffffff">
								tennytian</a>
							<!-- untuk deskripsi mempelai -->
							<p style="color:#ffffff;"><i style="font-size:15px;">
									Putri pertama dari</i><br>Bapak. Heru Sanjoyo
								<br>Ibu. Lilik Nuryati
							</p>

						</div>
					</div>
					<p class="heart text-center"><i class="icon-heart2" style="color:#3d2505;"></i></p>
					<div class="couple-half">
						<div class="bride">
							<img src="photos/cowo.png" alt="groom" class="img-responsive">
						</div>
						<div class="desc-bride">
							<h3 style="color:white;font-family:AksaraJawa;display:block;font-size:30px;">
								Mempelai Pria</h3>
							<h3 style="color:white;display:block;font-size:30px;">
								Achmad Bahrudin </h3>
							<i class="fa fa-instagram" style="color:#fff"></i>
							<a href="https://www.instagram.com/achmadbahrudin704/" style="color:#ffffff">
								achmadbahrudin704</a>
							<!-- untuk deskripsi mempelai -->
							<p style="color:#ffffff;"><i style="font-size:15px;">
									Putra pertama dari</i><br>Bapak. Surat<br>Ibu. Marmi </p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- countdonw -->
		<div id="fh5co-gallery" class="fh5co-bg" style=" background-image:url(photos/bg08.jpg);background-repeat: repeat;background-size: cover;">
			<div class="container">
				<div class="couple-wrap animate-box">
					<div class="col-md-12" style="text-align:center;">
						<h1 class="text-center" style="font-family:AksaraJawa;display:block;font-size: 42px;color: #3d2505;">
							Menghitung Hari</h1>
						<div id="hitungmundur1" class="gaya" style="background-color:#3d2505"></div>
						<div id="hitungmundur2" class="gaya" style="background-color:#3d2505"></div>
						<div id="hitungmundur3" class="gaya" style="background-color:#3d2505"></div>
						<div id="hitungmundur4" class="gaya" style="background-color:#3d2505"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- EVENT -->
		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(photos/banner1.jpg); background-position:right top;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Special Events</span>
						<h2 style="color:white;font-family:AksaraJawa;display:block;font-size:32px;">Acara
							Pernikahan</h2>
					</div>
				</div>
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-12">
								<div class="col-md-4 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>
											Akad
										</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>09.00 WIB </span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>15 Juli 2021
										</div>
										<p><label style="font-weight:normal; font-size:20px;">Kediaman Mempelai
												Wanita</label><br><span style="color:#ffffff;">Dsn. Kalianyar Ds. Ringinpitu Kec. Plemahan</span>
										</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>
											Resepsi
										</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>11.00 WIB - Selesai </span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>15 Juli 2021
										</div>
										<p><label style="font-weight:normal; font-size:20px;">Kediaman Mempelai
												Wanita</label><br><span style="color:#ffffff;">Dsn. Kalianyar Ds. Ringinpitu Kec. Plemahan</span>
										</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>
											UNDUH MANTU
										</h3>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>11.00 WIB - Selesai </span>
										</div>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>16 Juli 2021
										</div>
										<p>
											<label style="font-weight:normal; font-size:20px;">Kediaman Mempelai Pria</label>
											<br><span style="color:#ffffff;">Jl. Kunjang-Badas, Ds. Balongrejo, Kec. Badas</span>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-3">

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Ar Rum -->
		<div id="fh5co-gallery" class="fh5co-bg" style=" background-image:url(photos/bg08.jpg);background-repeat: repeat;background-size: cover;">
			<div class="container">
				<div class="couple-wrap animate-box">
					<div class="row">
						<div class="col-md-12 text-center ">
							<img src="photos/arrum.png" alt="Ar Rum" class="img-responsive" style="margin: 0 auto;">
							<p>“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.” (QS. Ar-Rum: 21)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- MAPS, LOCATION -->
		<div id="fh5co-event" class="fh5co-cover" style="background-image:url(photos/bg04.jpg);background-repeat: repeat;background-size: cover;">
			<div class="overlay" style="background-color:rgb(0 0 0 / 77%)"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading  animate-box" style="text-align: center;margin-bottom:2em ;">
						<span class="text-center">Google Maps</span>
					</div>
					<div class="col-md-6 text-center animate-box" style="margin-bottom:0px;">
						<h2 style="color:white;font-family:AksaraJawa;display:block;font-size:32px;">
							Lokasi Pernikahan</h2>
						<div class="text-center">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.9192247298856!2d112.18504231477745!3d-7.691817994455119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zN8KwNDEnMzAuNSJTIDExMsKwMTEnMTQuMCJF!5e0!3m2!1sid!2sid!4v1623519136435!5m2!1sid!2sid" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="text-center" style="padding-top: 50px;">
							<a href="https://maps.app.goo.gl/bN6mSbQmpqXn4JZk9" class="btn btn-default btn-sm" style="color:#3d2505;" target="blank">BUKA PETA</a>
						</div>
					</div>
					<div class="col-md-6 text-center animate-box" style="margin-bottom:0px;">
						<h2 style="color:white;font-family:AksaraJawa;display:block;font-size:32px;">
							Lokasi Unduh Mantu</h2>
						<div class="text-center">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662.3860098479931!2d112.20519293510704!3d-7.700076149672271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDInMDAuMCJTIDExMsKwMTInMTkuMSJF!5e0!3m2!1sid!2sid!4v1625372937771!5m2!1sid!2sid" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="text-center" style="padding-top: 50px;">
							<a href="https://maps.app.goo.gl/6FMdAVjD4TxfBQ237" class="btn btn-default btn-sm" style="color:#3d2505;" target="blank">BUKA PETA</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- PROKES -->
		<div id="fh5co-gallery" class="fh5co-section-white">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2 style="color:#3d2505;font-family:AksaraJawa;display:block;font-size:32px;">Informasi</h2>
				<p style="color: #5e4d37;">Pernikahan kami akan diselenggarakan dengan sangat memperhatikan tata tertib
					kesehatan dan jumlah
					tamu undangan yang terbatas setiap sesinya, karena kondisi pandemi. Oleh karena itu, kami
					menyarankan tamu kami untuk mengikuti protokol kesehatan sebelum memasuki venue. Kami sangat
					menghargai dukungan dan do"anya.
				<p>
				<div class="text-center">
					<img src="photos/PROKES.jpg" width="345" height="235" />
				</div>

				<br><br>
				<h3 style="color:#3d2505;font-family:AksaraJawa;display:block;font-size:18px;">
					Hormat Kami, <br>
					Teny & Bahrudin</h3>
			</div>

			<div id="fh5co-gallery" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<div class="text-center">
								<p style="color:#3d2505;font-family:AksaraJawa;display:block;font-size:32px;">you
									are my answered prayer, my fulfilled wish, my realized dream.</p>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-testimonial">
				<div class="container">
					<div class="row">
						<div class="row animate-box">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
								<h2 style="color:#3d2505;font-family:AksaraJawa;display:block;font-size:32px;">
									<span>Best Wishes</span>
									<h2 style="color:#3d2505;font-family:AksaraJawa;display:block;font-size:32px;">
										Ucapan dan Do'a</h2>
									<div style="padding:0 15px">
										<form method="POST" id="form-greeting" class="form-horizontal text-center">
											<input type="text" name="Name" class="form-control" placeholder="Nama Kamu" id="nama_kamu" required>
											<textarea name="Greeting" class="form-control" placeholder="Tulis Ucapan dan Doa" id="greeting" required></textarea>
											<button type="button" name="Submit" id="sendGreeting" class="btn btn-md btn-block text-center">Kirim</button>
										</form>
										<div id="alertMsg"></div>
										<br>
										<img src="images/floww.png" style="width:100px;"><br>
										<?php $sql = mysqli_query($conn, "SELECT name, greeting,created_at from greeting order by created_at DESC");
										require_once 'models/timesince.php';
										if ($sql->num_rows > 0) : ?>
											<div id="list-greeting" class="text-left" style="padding: 0px 7px ;">
												<hr>
												<?php
												foreach ($sql as $result) : ?>
													<div class="panel panel-default">
														<div class="panel-heading">
															<div class="panel-title">
																<i class="text-muted pull-right" style="margin:0px;line-height:1;font-size:12px;"><i class="fa fa-clock-o"></i> <?= time_since(strtotime($result['created_at'])); ?></i>
																<h5 style="margin:0px;margin-bottom:0px;" class=""><label for=""><?= $result['name']; ?></label></h5>
															</div>
														</div>
														<div class="panel-body">
															<h4 class=""><?= $result['greeting']; ?></h4>
														</div>
													</div>
												<?php endforeach;
											else : ?>

												<h4 class="text-center text-muted"><i>tidak ada ucapan</i></h4>
											<?php endif; ?>

											</div>
									</div>
							</div>
						</div>

						<div class="text-center animate-box">
							<img class="animated zoomIn slower" src="images/logo-nikahalal.png" height="180" width="auto" />
						</div>
					</div>
					<div class="gototop js-top">
						<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
					</div>

					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

					<script src="assets/js/jquery.easing.1.3.js"></script>
					<script src="assets/js/jquery.waypoints.min.js"></script>
					<script src="assets/js/owl.carousel.min.js"></script>
					<script src="assets/js/jquery.countTo.js"></script>
					<script src="assets/js/jquery.stellar.min.js"></script>
					<script src="assets/js/jquery.magnific-popup.min.js"></script>
					<script src="assets/js/magnific-popup-options.js"></script>
					<script src="assets/js/simplyCountdown.js"></script>
					<script src="assets/js/main.js"></script>
					<script src="assets/js/index.js"></script>
					<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>


					<script>
						var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

						// default example
						simplyCountdown(".simply-countdown-one", {
							year: d.getFullYear(),
							month: d.getMonth() + 1,
							day: d.getDate()
						});

						//jQuery example
						$("#simply-countdown-losange").simplyCountdown({
							year: d.getFullYear(),
							month: d.getMonth() + 1,
							day: d.getDate(),
							enableUtc: false
						});

						// menghitung
						Hitung();

						function Hitung() {
							// 15 Juli 2021
							tahun = 2021;
							bulan = 07;
							hari = 15;
							jam = 09;
							menit = 00;
							detik = 00;

							setTimeout(function() {
								tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
								tglSkrg = new Date();
								tglSkrg = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
								var sisaHari = parseInt((tglTarget - tglSkrg) / 86400000);
								var sisaJam = parseInt((tglTarget - tglSkrg) / 3600000);
								var sisaMenit = parseInt((tglTarget - tglSkrg) / 60000);
								var sisaDetik = parseInt((tglTarget - tglSkrg) / 1000);
								detik = sisaMenit * 60;
								detik = sisaDetik - detik;
								menit = sisaJam * 60;
								menit = sisaMenit - menit;
								jam = sisaHari * 24;
								jam = (sisaJam - jam) < 0 ? 0 : sisaJam - jam;
								hari = sisaHari;
								mulaiHitung(hari, jam, menit, detik, tahun);
							}, 1000);
						}

						function mulaiHitung(hari, jam, menit, detik, tahun) {
							document.getElementById("hitungmundur1").innerHTML = "" + hari + "<span>Hari</span>";
							document.getElementById("hitungmundur2").innerHTML = "" + jam + "<span>Jam</span>";
							document.getElementById("hitungmundur3").innerHTML = "" + menit + "<span>Menit</span>";
							document.getElementById("hitungmundur4").innerHTML = "" + detik + "<span>Detik</span>";
							Hitung();
						}


						// button audio
						document.getElementById("mute").style.display = "none";
						var x = document.getElementById("myAudio");

						function playAudio() {
							x.play();
							document.getElementById("un-mute").style.display = "none";
							document.getElementById("mute").style.display = "inline-block";
						}

						function pauseAudio() {
							x.pause();
							document.getElementById("mute").style.display = "none";
							document.getElementById("un-mute").style.display = "inline-block";
						}

						// Send greeting
						$(document).on('click', '#sendGreeting', function() {
							// alert('send');
							let name = $('#nama_kamu').val();
							let greeting = $('#greeting').val();
							if (name == '') {
								alert("Isi Nama kamu dulu ya!");
							} else if (greeting == '') {
								alert("Jangan lupa kasih Ucapan dan Do'a kamu untuk kedua mempelai!");
							} else {
								let formData = new FormData($('#form-greeting')[0])
								$.ajax({
									url: 'models/create_greeting.php',
									type: 'POST',
									data: formData,
									contentType: false,
									processData: false,
									async: false,
									dataType: 'JSON',
									beforeSend: function() {
										$('#alertMsg').html("<img src='images/loader.gif' height='40px'>").fadeIn('slow').slideDown('slow')
									},
									success: function(result) {
										if (result.code == 1) {
											$('#nama_kamu').val('');
											$('#greeting').val('');
											$('#alertMsg').html("<div class='alert alert-success'>" + result.msg + "</div>")
											$(`<div class="panel panel-default" id="newGreeting">
									<div class="panel-heading">
										<div class="panel-title">
											<i class="text-muted pull-right" style="margin:0px;line-height:1;font-size:12px;"><i class="fa fa-clock-o"> </i> ` + result.date + `</i>
											<h5 style="margin:0px;margin-bottom:0px;" class=""><label for="">` + result.nama + `</label></h5>
										</div>
									</div>
									<div class="panel-body">
										<h4 class="">` + result.greeting + `</h4>
									</div>
								</div>
								`).prependTo('#list-greeting').hide().fadeIn('3000');
											setTimeout(function() {
												$('.alert-success').fadeOut('slow');
											}, 2000)

										} else {
											$('#alertMsg').html("<div class='alert alert-danger'> " + result.msg + "</div>")
										}
									},
									error: function(result) {
										$('#alertMsg').html("<div class='alert alert-danger'>#Internal server error!!</div>")
									}
								})
							}
						})
					</script>
</body>

</html>